var dpw = function(config) {
	var _this = this;
	var i;
	this.config = this._getConfig();
	var confKeys = Object.keys(config);

	for (i = 0; i < confKeys.length; i++) {
		var value = config[confKeys[i]];

		if (!isNaN(value) && typeof value !== 'boolean') {
			this.config[confKeys[i]] = parseInt(value);
		} else {
			this.config[confKeys[i]] = value;
		}
	}

	if (config.translate) {
		this.tools.combinationTranslate(config.translate, this.config.text);
		this.config.load = true;
	} else {
		if (window.localStorage) {
			this.tools.storage.$this = this.tools;

			if (this.tools.storage.get('translate.' + this.config.lang)) {
				this.tools.combinationTranslate(JSON.parse(this.tools.storage.get('translate.' + this.config.lang)), _this.config.text);
				this.config.load = true;
			} else {
				this._apiXhr(this.config.apiCommands.translate, function(data) {
					_this.config.lang = data.lang;
					_this.tools.combinationTranslate(data.translate, _this.config.text);
					_this.config.load = true;
					_this.tools.storage.set('translate.' + data.lang, data.translate, true);
				});
			}
		} else {
			this._apiXhr(this.config.apiCommands.translate, function(data) {
				_this.config.lang = data.lang;
				_this.tools.combinationTranslate(data.translate, _this.config.text);
				_this.config.load = true;
			});
		}
	}
};

dpw.prototype.tools = {
	createElement: function(element, attributes) {
		element = document.createElement(element);

		if (!attributes) {
			return element;
		}

		Object.keys(attributes).forEach(function(a) {
			element.setAttribute(a, attributes[a]);
		});

		return element;
	},
	addClass: function() {
		if (!arguments[0] || dpw.prototype.tools.hasClass(arguments[0], arguments[1])) {
			return;
		}

		var elem = arguments[0].className.trim().split(/\s+/g);

		elem.push(arguments[1]);
		arguments[0].className = elem.join(' ');
	},
	removeClass: function() {
		if (!arguments[0]) {
			return;
		}

		var newClass = arguments[0].className.split(' ');

		if (!!~newClass.indexOf(arguments[1])) {
			newClass.splice(newClass.indexOf(arguments[1]), 1);
		}

		arguments[0].className = newClass.join(' ');
	},
	hasClass: function() {
		return !!~arguments[0].className.split(' ').indexOf(arguments[1]);
	},
	isIE: function() {
		var ua = window.navigator.userAgent;
		var oldIE = ua.indexOf('MSIE');

		if (oldIE !== -1 || ua.indexOf('Trident/7') !== -1) {
			if (oldIE !== -1) {
				return parseInt(ua.substring(oldIE + 5, ua.indexOf(".", oldIE)));
			} else {
				return 11;
			}
		}
	},
	bind: function(elem, type, handler) {
		if (elem.addEventListener) {
			elem.addEventListener(type, handler, false);
		} else {
			elem.attachEvent('on' + type, handler);
		}
	},
	unbind: function(elem, type, handler) {
		if (elem.removeEventListener) {
			elem.removeEventListener(type, handler, false);
		} else {
			elem.detachEvent('on' + type, handler);
		}
	},
	each: function (selector, callback) {
		var i = -1;
		while (++i < selector.length) {
			callback(selector[i]);
		}
	},
	shuffle: function(o) {
		for (var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
		return o;
	},
	combinationTranslate: function(conf, $this) {
		conf = typeof conf === 'string' ? JSON.parse(conf) : conf;

		var translateKeys = Object.keys(conf);

		for (var i = 0; i < translateKeys.length; i++ ) {
			$this[translateKeys[i]] = conf[translateKeys[i]];
		}
	},
	storage : {
		set : function(key, value, stringify){
			window.localStorage.setItem("dp." + key, stringify ? JSON.stringify(value) : value)
		},
		get : function(key){
			var o = {};
			if (key){
				return window.localStorage["dp." + key];
			} else {
				for (var i in localStorage){
					if(i.search(/dp/i) != -1){
						o[i] = window.localStorage[i]
					}
				}
				return o;
			}

		},
		clear : function(){
			window.localStorage.clear();
			console.log('localStorage cleared')
		},
		remove: function(item){
			window.localStorage.removeItem('dp.' + item);
		}
	}
};

dpw.prototype._getConfig = function() {
	var host = this._detectHost();
	return {
		apiKey: '6b19af032453b9f12516eda68097a3b9f352170d',
		cssProps: {
			header: 46,
			headerProps: {
				min: 200,
				little: 350,
				small: 400,
				middle: 600
			},
			footer: 30,
			maxSize: 1900,
			minSize: {
				w: 130,
				h: 90,
				heightNormalView: 130
			},
			borderError: 2,
			marginError: 10,
			squeezedLogoWidth: 100,
			squeezedLogoHeight: 130
		},
		classNames: {
			widget: 'dp-widget',
			frameWidget: 'dp-widget-frame',
			loader: 'dp-loader',
			portfolio: 'd-portfolio',
			pager: 'dp-pager',
			pagerCurrentTab: 'dp-pager-active',
			pagerInactiveTab: 'dp-inactive',
			table: 'dp-table',
			tr: 'dp-tr',
			header: {
				small: 'dp-header-small',
				little: 'dp-header-little',
				middle: 'dp-header-middle',
				large: 'dp-header-large',
				noLogo: 'dp-header-no-logo'
			},
			footer: {
				little: 'dp-footer-little',
				pagerSmall: 'dp-pager-small'
			},
			darkTheme: 'dp-dark-theme',
			whiteTheme: 'dp-white-theme',
			transparentTheme: 'dp-transparent-theme',
			sectionDark: 'dp-section-dark-theme',
			silverTheme: 'dp-silver-theme',
			sectionTransparentTheme: 'dp-section-transparent-theme',
			error: 'dp-error',
			helper: 'dp-helper',
			noBorder: 'dp-no-border',
			searchTypeOpener: 'dp-search-type-open',
			responsive: 'dp-responsive',
			squeezed: 'dp-squeezed',
			squeezedLogo: 'dp-squeezed-logo',
			inputWrapper: 'dp-search-input-wrapper'
		},
		formNames: {
			searchQuery: 'search_query'
		},
		links: {
			home: host,
			logo: host + 'img/widget/dp-widget-logo.png',
			logoDark: host + 'img/widget/dp-widget-logo-dark.png',
			logoSqueezedWhite: host + 'img/widget/dp-squeezed-mode-logo-white.jpg',
			logoSqueezedDark: host + 'img/widget/dp-squeezed-mode-logo-dark.jpg',
			logoSqueezedTransparent: host + 'img/widget/dp-squeezed-mode-logo-transparent.png',
			silverLogo: host + 'img/widget/dp-widget-logo-silver.png',
			style: host + 'css/parts/depositphotos-widget.css',
			loader: host + 'img/in_progress.gif',
			searchType: host + 'img/widget/dp-widget-search-sprite.png',
			searchTypeImg: host + 'img/widget/dp-widget-search-sprite.png'
		},
		text: {
			formInput: 'Search for Photos, Vector Images and Videos',
			formSubmit: 'Search',
			portfolio: 'Portfolio',
			pager: {
				previous: '&laquo;',
				next: '&raquo;'
			},
			logo: {
				alt: 'Depositphotos'
			},
			noResult: 'Sorry, your search returned no results.',
			smallSize: 'Small size for render items',
			failAuthor: 'Author not found!',
			failTrackingLink: 'Set the tracking link',
			helper: 'Type a page number and press Enter.',
			noBlock: 'Please set the [data-dpw=widget id] to your block',
			searchTypes: {
				allFiles: 'All Files',
				photo: 'Photos',
				vector: 'Vectors',
				video: 'Videos'
			},
			oldBrowser: 'Your browser is not supported'
		},
		cacheLoad: 5,
		randomLoad: 20,
		inlineStyle: {
			helper: {
				element: 'position: absolute;z-index: 999999;text-align: justify;padding: 7px 10px;background-color: #fff;border: 1px solid #8c8c8c;font: normal 11px Arial,Helvetica,sans-serif;' +
					'color: #696969;box-shadow: 1px 2px 6px #888;-moz-box-shadow: 1px 2px 6px #888;-webkit-box-shadow: 1px 2px 6px #888;',
				i: 'display: block;position: absolute;width: 0;height: 0;border: 4px solid transparent;top: -8px;left: 50%;margin-left: -8px;border-top: 0 solid transparent;' +
					'border-right: 8px solid transparent;border-bottom: 8px solid #8c8c8c;border-left: 8px solid transparent',
				childI: 'display: block;position: absolute;width: 0;height: 0;border: 4px solid transparent;top: 1px;left: -7px;border-top: 0 solid transparent;border-right: 7px solid transparent;' +
					'border-bottom: 7px solid #fff;border-left: 7px solid transparent;'
			},
			searchType: {
				menu: 'position: absolute; z-index: 99999; border: 1px solid #c8c8c8; border-top: none; margin: 0; padding: 6px 0; background-color: #fff;',
				li: 'margin: 0; padding: 0; white-space: nowrap; list-style: none; cursor: pointer;',
				label: 'display: block; padding: 8px 15px 6px; height: 14px;',
				input: 'vertical-align: top; margin: 0 5px 0 0; width: auto;',
				span: 'padding-left: 5px; background: none; color: #3c3c3c; font: normal 12px Arial; line-height: 13px; vertical-align: top;',
				img: 'display:inline-block; vertical-align: top; margin: 0 0 0 5px;'
			}
		},
		apiCommands: {
			host: 'http://api.depositphotos.com/',
			translate: '&dp_command=getWidgetTranslate',
			offset : '&dp_search_offset=',
			limit: '&dp_search_limit=',
			favourites: '&dp_command=getLightbox&dp_limit=%limit%&dp_offset=%offset%&dp_lightbox_id=%lightboxId%',
			search: '&dp_command=search&dp_watermark=depositphotos',
			sort: '&dp_search_sort=',
			editorial:  '&dp_search_editorial=',
			orientation: '&dp_search_orientation=horizontal'
		},
		thumb_sizes: {
			previewNamespace: {
				110: 'thumbnail',
				170: 'medium_thumbnail',
				380: 'thumb_large',
				450: 'thumb_huge',
				950: 'thumb_max'
			},
			minSize: 50,
			maxSize: 950,
			videoMaxSize: 450
		}
	}
};

dpw.prototype._detectHost = function() {
	if (window.location.href.search(/\.dev/g) !== -1) {
		return window.location.protocol + '//' + window.location.hostname + '/';
	} else {
		if (window.location.href.search(/depositphotos.net/g) !== -1) {
			return 'http://depositphotos.net/';
		} else {
			return 'http://static.depositphotos.com/';
		}
	}
};

dpw.prototype._makeTagsUrl = function(link, type, encode) {
	var tags = '?utm_medium=widget&utm_source='+ window.location.host +'&utm_campaign=' + type;
	return link + ((encode) ? encodeURIComponent(tags) : tags);
};

dpw.prototype.init = function() {
	var _this = this;
	this.content = {};
	this.local = {};

	if (typeof window.dph !== 'object') {
		window.dph = {};
	} else {
		window.dph[this.config.wid] = this;
	}

	if (document.all && !document.querySelector) {
		this.tools.each(document.getElementsByTagName('*'), function(element) {
			if ((element.className === _this.config.classNames.widget) || (element.className === _this.config.classNames.frameWidget)) {
				var div = document.createElement('span');
				div.innerHTML = _this.config.text.oldBrowser;
				element.parentNode.replaceChild(div, element)
			}
		});
	}

	if (!this.config.wid) {
		this.tools.each(document.querySelectorAll('[class*="dp-widget"]'), function(elems) {
			if (!elems.hasAttribute('data-dpw')) {
				_this.general = elems;
				_this.config.wid = parseInt(Math.random() * 100);
				_this.general.setAttribute('data-dpw', _this.config.wid);
			}
		});
	} else {
		this.general = document.querySelector('[data-dpw="' + this.config.wid + '"]');
	}

	if (!this.general) {
		throw new Error(this.config.text.noBlock);
	}

	if (this.general.nodeName.toLowerCase() === 'iframe') {
		if (this.tools.isIE()) {
			try {
				if (this.tools.isIE() === 8) {
					this.config.preview = false;
				}

				var widget = this.general;
				var iframe = document.createElement('iframe');
				var parent = this.general.parentNode;

				iframe.frameBorder = 0;
				parent.replaceChild(iframe, this.general);
				this.iframe = this.general;

				setTimeout(function() {
					var content = iframe.contentWindow || iframe.contentDocument;
					content = content.document || content;

					_this.general = content.body;
					_this.tools.addClass(content.body, _this.config.classNames.widget);
					_this._prepareWidget();

					_this.tools.each(widget.attributes, function(attr) {
						iframe.setAttribute(attr.nodeName, attr.value);
						_this.iframe = iframe;
					});
				}, 3);
			} catch (e) {
				throw new Error(_this.config.text.oldBrowser + '. ' + e);
			}
		} else {
			this.iframe = this.general;
			this.general.frameBorder = 0;
			this.general = this.general.contentDocument.body;
			this.tools.addClass(this.general, this.config.classNames.widget);
			this._prepareWidget();
		}
	} else {
		this._prepareWidget();
	}
	if (this.config.responsive) {
		this.tools.bind(window, 'resize', function() {
			_this._arrangeTableItems();
		});
	}
};

dpw.prototype._prepareWidget = function() {
	var _this = this;

	this._setWidgetSize();
	this._loadStyle();

	if (this.config.theme) {
		switch (this.config.theme) {
			case 'dark':
				_this.tools.addClass(this.general, this.config.classNames.darkTheme);
				break;
			case 'white':
				_this.tools.addClass(this.general, this.config.classNames.whiteTheme);
				break;
			case 'transparent':
				_this.tools.addClass(this.general, this.config.classNames.transparentTheme);
				break;
		}
	}

	if (this.config.responsive) {
		this.tools.addClass(this.general, this.config.classNames.responsive);
	}

	if (!this.config.showborder) {
		this.tools.addClass(this.general, this.config.classNames.noBorder);
	}

	this._toggleLoader(true, this.general);

	var i = 0;
	var timer = setInterval(function() {
		if (_this.config.load) {
			clearInterval(timer);
			_this._toggleLoader(false, _this.general);
			_this._constructWidget();
		} else if (i === 300) {
			clearInterval(timer);
			_this._toggleLoader(false, _this.general);
			_this._constructWidget();
		}
		i++;
	}, 10);
};

dpw.prototype._constructWidget = function() {
	this._closestThumb();
	this._createWidget();

	if (this.content.header && this.content.footer && (this.tools.isIE() === 8 ? this.content.section.style.height : this.content.section.offsetHeight) < this.config.cssProps.minSize.w) {
		if (this.content.header.offsetHeight >= this.config.cssProps.header && this.config.searchBar && this.config.showlogo) {
			this.content.header.style.height = this.config.cssProps.header + 'px';
			this.content.searchBar.style.display = 'none';
			this.content.section.style.height = this.config.feedheight - this.config.cssProps.header - this.config.cssProps.footer + 'px';

			if (this.config.showborder && this.iframe) {
				this.content.section.style.height = this.content.section.offsetHeight - this.config.cssProps.borderError + 'px';
			}

			if (this.content.section.offsetHeight >= this._getThumbSize()) {
				this._initContent();
			} else {
				this._showError(this.config.text.smallSize);
			}
		} else {
			this._showError(this.config.text.smallSize);
		}
	} else {
		this._initContent();
	}
};

dpw.prototype._setWidgetSize = function() {
	if ((this.config.searchBar || this.config.showlogo) && this.config.feedwidth <= this.config.cssProps.headerProps.min) {
		this.config.feedwidth = this.config.cssProps.headerProps.min;
	} else {
		if (!this.config.searchBar && !this.config.showlogo && this.config.limitpage && !this.config.showportfolio) {
			if (this.config.feedwidth < this.config.cssProps.minSize.w) {
				this.config.feedwidth = this.config.cssProps.minSize.w;
			}
			if (this.config.feedheight < this.config.cssProps.minSize.h) {
				this.config.feedheight = this.config.cssProps.minSize.h;
			}
		}
	}

	if (this.config.feedwidth > this.config.cssProps.maxSize) {
		this.config.feedwidth = this.config.cssProps.maxSize;
	} else {
		if (this.config.feedheight > this.config.cssProps.maxSize) {
			this.config.feedheight = this.config.cssProps.maxSize;
		}
	}

	var borderError = this.config.showborder && this._isSqueezedMode() ? this.config.cssProps.borderError : 0;
	var feedwidth = this.config.feedwidth + borderError;

	this.general.style.height = this.config.feedheight + borderError + 'px';
	this.general.style.width = this.config.responsive ? '100%' : feedwidth + 'px';
	this.general.style.maxWidth = feedwidth + 'px';
	this.general.style.minWidth = this.config.cssProps.minSize.w + 'px';
	this.general.style.display = 'block';

	if (this.iframe) {
		this.iframe.style.height = this.general.style.height;
		this.iframe.style.width = this.general.style.width;
		this.iframe.style.maxWidth = this.general.style.maxWidth;
		this.iframe.style.minWidth = this.general.style.minWidth;
		this.iframe.style.display = 'block';
	}
};

dpw.prototype._loadStyle = function() {
	var link = this.tools.createElement('link', {
		type: 'text/css',
		rel: 'stylesheet',
		href: this.config.links.style
	});

	if (this.iframe) {
		this.general.parentNode.getElementsByTagName('head')[0].appendChild(link);
	} else {
		if (!document.getElementsByTagName("head")[0].querySelectorAll('link[href$="'+ link.href +'"]').length) {
			document.getElementsByTagName("head")[0].appendChild(link);
		}
	}
};

dpw.prototype._createWidget = function() {
	this.local.trackingLink = ((this.config.trackingLink.search(/^http:\/\/tracking\.depositphotos\.com/g) !== -1) ? this.config.trackingLink + '&url=' : '').replace(/\#038\;/g, '').replace(/url\_id\=[0-9]*/g, '');

	if (this.config.searchBar || this.config.showlogo) {
		this._createHeader();
	}

	this._createSection();

	if (!this.config.limitpage || this.config.showportfolio) {
		this.content.footer = this.tools.createElement('footer', {'style': 'height:' + this.config.cssProps.footer + 'px', 'class' : (this.local.widgetLittle) ? this.config.classNames.footer.little : '' });
		this.general.appendChild(this.content.footer);
	}
};

dpw.prototype._createSqueezedLogo = function() {
	var logoSrc;
	switch (this.config.theme) {
		case 'dark':
			logoSrc = this.config.links.logoSqueezedDark;
			break;
		case 'transparent':
		case 'white':
			logoSrc = this.config.links.logoSqueezedTransparent;
			break;
		default:
			logoSrc = this.config.links.logoSqueezedWhite;
			break;
	}
	var img = this.tools.createElement('img', {
		src: logoSrc,
		class: this.config.classNames.squeezedLogo,
		style:
			'top:' + ((this.config.feedheight - this.config.cssProps.squeezedLogoHeight) / 2) + 'px;' +
				'width:' + this.config.cssProps.squeezedLogoWidth + 'px;' +
				'height:' + this.config.cssProps.squeezedLogoHeight + 'px;'
	});
	var a = this.tools.createElement('a', {
		href: 'http://depositphotos.com/',
		target: '_blank'
	});
	a.appendChild(img);
	return a;
};

dpw.prototype._createHeader = function() {
	if (this._isSqueezedMode()) {
		this.general.appendChild(this._createSqueezedLogo());
	} else {
		var _this = this;
		var showTypes;
		var width = parseInt(this.config.feedwidth);

		this.content.header = this.tools.createElement('header');
		this.config.headerHeight = false;

		switch (true) {
			case (width < this.config.cssProps.headerProps.little):
				this.local.widgetLittle = true;
				this.config.showportfolio = false;

				this.content.header.className = this.config.classNames.header.little;

				if (this.config.showlogo) {
					this.config.headerHeight = this.config.cssProps.header + (this.config.searchBar ? 40 : 0);
				} else {
					this.tools.addClass(this.content.header, this.config.classNames.header.noLogo);
				}
				showTypes = false;
				break;
			case ((!Number(this.config.feedwidth))):
			case (width <= this.config.cssProps.headerProps.small):
				this.content.header.className = this.config.classNames.header.small;

				if (this.config.showlogo) {
					this.config.headerHeight = this.config.cssProps.header + (this.config.searchBar ? 40 : 0);
				} else {
					this.tools.addClass(this.content.header, this.config.classNames.header.noLogo);
				}

				showTypes = false;
				break;
			case (width <= this.config.cssProps.headerProps.middle):
				var searchWidth = width / 2;
				this.content.header.className = this.config.classNames.header.middle;

				if (!this.config.showlogo) {
					this.tools.addClass(this.content.header, this.config.classNames.header.noLogo);
				}

				if (!this.config.showlogo && width >= 460) {
					searchWidth = width - 150;
				} else {
					if (this.config.showlogo && width < 460) {
						searchWidth -= 80;
					} else {
						if (width > 450 && width <= 500) {
							searchWidth -= 60;
						} else {
							searchWidth -= 50;
						}
					}
				}

				if (searchWidth > 240) {
					showTypes = true;
				}
				break;
			default:
				this.content.header.className = this.config.classNames.header.large;

				if (!this.config.showlogo) {
					this.tools.addClass(this.content.header, this.config.classNames.header.noLogo);
				}

				showTypes = true;
				break;
		}


		if (this.config.headerHeight) {
			this.content.header.style.height = this.config.headerHeight + 'px';
			this.config.cssProps.headerProps.height = this.config.headerHeight;
		}

		if (this.config.showlogo){
			var logoSrc;

			switch (this.config.theme) {
				case 'dark':
					logoSrc = this.config.links.logoDark;
					break;
				case 'white':
				case 'transparent':
					logoSrc = this.config.links.silverLogo;
					break;
				default:
					logoSrc = this.config.links.logo;
					break;
			}

			var link = this.tools.createElement('a', {
				href: this._makeTagsUrl('http://'+ (this.config.lang === 'en' ? '' : this.config.lang + '.') +'depositphotos.com', 'logo'),
				target: '_blank'
			});
			var logo = this.tools.createElement('img', {
				src: logoSrc,
				alt: this.config.text.logo.alt
			});

			link.appendChild(logo);
			this.content.header.appendChild(link);
		}

		if (this.config.searchBar) {
			var search = this.content.searchBar = this.tools.createElement('form', {
				name: 'search_form'
			});
			var createInput = function() {
				var wrapper = _this.tools.createElement('span', {
					class: _this.config.classNames.inputWrapper
				});
				var input = _this.tools.createElement('input', {
					type: 'text',
					name: _this.config.formNames.searchQuery,
					placeholder: _this.config.text.formInput,
					maxlength: 128
				});

				_this.local.searchWidth = input.style.width;
				wrapper.appendChild(input);
				return wrapper;
			};
			var createSubmit = function() {
				var submit = _this.tools.createElement('input', {
					type: 'submit',
					value: _this.config.text.formSubmit
				});
				_this.tools.bind(submit, 'click', function(e) {
					_this._formSearch(e);
				});
				return submit;
			};

			search.appendChild(createSubmit());
			if (showTypes) {
				search.appendChild(this._createSearchTypes());
				search.appendChild(this.tools.createElement('input', {
					type: 'hidden',
					name: 'search_type'
				}));
			}

			search.appendChild(createInput());

			this.content.header.appendChild(search);
		}
		this.general.appendChild(this.content.header);
	}
};

dpw.prototype._createSearchTypes = function() {
	var _this = this;
	var wrapper = this.tools.createElement('span');
	var dotted = this.tools.createElement('span');
	wrapper.appendChild(dotted);

	var types = ['photo', 'vector', 'video'];

	for (var i = 0; i < types.length; i++) {
		wrapper.appendChild(this.tools.createElement('i', {'data-type': types[i]}));
	}

	var opener = this.tools.createElement('i', {'data-event': 'opener'});

	wrapper.appendChild(opener);

	var typeClick = new dpwSearchType(this, wrapper);

	this.tools.bind(wrapper, 'click', function(e) {
		var menu = document.getElementById(_this.menuId);

		if (menu) {
			var menuStyle;

			if (window.getComputedStyle) {
				menuStyle = getComputedStyle(menu, null);
			} else {
				menuStyle = menu.currentStyle;
			}

			_this.local.menuVisible = menuStyle.visibility;
		}

		if (menu && menuStyle.visibility === 'visible') {
			menu.style.visibility = 'hidden';
			_this.tools.removeClass(opener, _this.config.classNames.searchTypeOpener);
		} else {
			typeClick.show(e);
			_this.tools.addClass(opener, _this.config.classNames.searchTypeOpener);
		}
	});

	return wrapper;
};

dpw.prototype._getRowsLen = function(isNotInitCall) {

	var width = isNotInitCall && this.config.responsive ?
		(this.iframe || this.general).offsetWidth :
		(this.config.searchBar || this.config.showlogo) ? this.config.feedwidth - this.config.cssProps.squeezedLogoWidth :  this.config.feedwidth;

	return parseInt(width / this._getThumbSize());
};
dpw.prototype._getThumbSize = function() {
	return this.local.closestThumb.thumbsize + this.config.cssProps.borderError + this.config.cssProps.marginError;
};

dpw.prototype._createSection = function() {
	this.content.section = this.tools.createElement('section');

	var height = this.config.feedheight;
	var header;
	var section;
	var footer = !this.config.limitpage || this.config.showportfolio ? this.config.cssProps.footer : 0;

	if (this.content.header) {
		if (this.config.cssProps.headerProps.height) {
			header = this.config.cssProps.headerProps.height;
		} else {
			header = this.config.cssProps.header;
		}
	} else {
		header = 0;
	}

	section = height - (header + footer);
	var columns = parseInt(section / this._getThumbSize());
	var rows = this._getRowsLen();

	if (this.config.showborder && this.config.cssProps.headerProps.height || !header || !footer) {
		section -= this.config.cssProps.borderError;
	}

	this.content.section.style.height = section + 'px';
	this.local.limitItems = columns * rows;
	this.local.rows = rows;

	if (this.config.background) {
		switch (this.config.background) {
			case 'dark':
				if (this.config.theme) {
					switch (this.config.theme) {
						case 'dark':
						case 'transparent':
						case 'white':
							this.tools.addClass(this.content.section, this.config.classNames.sectionDark);
							break;
						default:
							this.tools.addClass(this.general, this.config.classNames.silverTheme);
							break;
					}
				} else {
					this.tools.addClass(this.general, this.config.classNames.silverTheme);
				}

				break;
			case 'transparent':
				this.tools.addClass(this.content.section, this.config.classNames.sectionTransparentTheme);
				break;
		}
	}

	if (this.local.closestThumb.thumbsize === 170) {
		this.tools.addClass(this.content.section, this.config.classNames.largeThumbs);
	}

	if (this._isSqueezedMode()) {
		var feedWidth;

		if ((this.config.searchBar || this.config.showlogo) && this.config.feedheight <= this.config.cssProps.squeezedLogoHeight) {
			feedWidth = this.config.feedwidth - this.config.cssProps.squeezedLogoWidth;
		} else {
			feedWidth = this.config.feedwidth ;
		}

		this.content.section.style.width = feedWidth + 'px';
	}

	this.general.appendChild(this.content.section);
};

dpw.prototype._destroyWidget = function() {
	this.general.removeChild(this.content.header);
	this.general.removeChild(this.content.section);
	this.general.removeChild(this.content.footer);
	this.local = {};
};

dpw.prototype._isSqueezedMode = function() {
	return (
		this.config.feedheight >= this.config.cssProps.minSize.h &&
			this.config.feedheight <= this.config.cssProps.minSize.heightNormalView
		);
};

dpw.prototype._initContent = function() {
	var _this = this;
	var currentTab = this.local.pagerCurrentTab;
	var query = this._getSearchQuery();
	if (!query) return;

	var process = function() {
		switch (true) {
			case _this.config.feedtype === 'favourites':
				_this._apiGetLightbox(query, _this.local.limitItems);
				break;
			case !currentTab || currentTab == 1:
				_this._apiExecuteSearch(query, _this.config.feedtype, _this.local.limitItems);
				break;
			case !_this.config.limitpage:
				_this._pagerInit();
				break;
		}
	};
	this._toggleLoader(true);

	if ((this.tools.isIE() === 8 ? this.content.section.style.height : this.content.section.offsetHeight) < this._getThumbSize()) {
		if (this._isSqueezedMode()) {
			this.tools.addClass(this.general, this.config.classNames.squeezed);
			process();
		} else {
			this._showError(_this.config.text.smallSize);
			return;
		}
	} else {
		process();
	}
};

dpw.prototype._pagerInit = function(count) {
	var _this = this;
	count = count || this.local.count;

	if (this.config.feedwidth <= 250 && !(this.content.searchBar || this.config.showlogo)) {
		if (!this.config.showportfolio) {
			this.general.removeChild(this.content.footer);
			this.content.section.style.height = this.content.section.offsetHeight + this.config.cssProps.footer + 'px';
		}
		return;
	}

	if (!count || !(this.local.limitItems <= count)) {
		return false;
	}

	if (!this.content.footer.getElementsByClassName(this.config.classNames.pager).length) {
		this.content.pager = this.tools.createElement('div', {'class': _this.config.classNames.pager});
		var tabsLength = Math.ceil(count / this.local.limitItems);

		this.local.pagerLastTab = tabsLength;

		this.content.pager.back = this.tools.createElement('a', {
			href: 'javascript:void(0)',
			'data-tab': 'previous',
			'class': this.config.classNames.pagerInactiveTab
		});
		this.content.pager.back.innerHTML = this.config.text.pager.previous;

		this.tools.bind(this.content.pager.back, 'click', function(e) {
			_this._onPagerPrevClick(e)
		});

		this.content.pager.appendChild(this.content.pager.back);

		var i = 0;
		if (tabsLength >= 5) {
			while (i++ < 2) {
				if (this.config.feedwidth <= 260 && i === 2) break;
				var tab = _this.tools.createElement('a', {
					href: 'javascript:void(0)',
					'data-page': i
				});

				if (i === 1) {
					tab.className = this.config.classNames.pagerCurrentTab;
				}

				tab.innerHTML = i;

				this.tools.bind(tab, 'click', function(e) {
					_this._onPagerClick(e);
				})

				this.content.pager.appendChild(tab);
			}

			this.content.pager.setPage = this.tools.createElement('input', {type: 'text'});

			this.tools.bind(this.content.pager.setPage, 'keyup', function(e) {
				_this._onPagerSetPageKeyup(e);
			});
			this.tools.bind(this.content.pager.setPage, 'click', function(e) {
				_this._onPagerSetPageClick(e);
			});
			this.tools.bind(this.content.pager.setPage, 'blur', function(e) {
				_this._onPagerSetPageBlur(e);
			});

			this.content.pager.appendChild(this.content.pager.setPage);

			var lastTab = this.tools.createElement('a', {
				href: 'javascript:void(0)',
				'data-page': tabsLength
			});

			lastTab.innerHTML = tabsLength;

			this.tools.bind(lastTab, 'click', function(e) {
				_this._onPagerClick(e, tabsLength);
			});
			if (this.config.feedwidth <= 300) {
				this.tools.addClass(this.content.footer, this.config.classNames.footer.little);
			} else if (this.config.feedwidth <= 260) {
				this.tools.addClass(this.content.footer, this.config.classNames.footer.pagerSmall);
			} else {
				var penultimate = this.tools.createElement('a', {
					href: 'javascript:void(0)',
					'data-page': tabsLength - 1
				});

				penultimate.innerHTML = tabsLength - 1;

				this.tools.bind(penultimate, 'click', function(e) {
					_this._onPagerClick(e, tabsLength - 1);
				});

				this.content.pager.appendChild(penultimate);
			}

			this.content.pager.appendChild(lastTab);
		} else {
			i = 0;
			this.local.pagerLastTab = tabsLength;

			while (++i <= tabsLength) {
				var tab = _this.tools.createElement('a', {
					href: 'javascript:void(0)',
					'data-page': i
				});

				if (i === 1) {
					tab.className = this.config.classNames.pagerCurrentTab;
				}

				tab.innerHTML = i;
				this.tools.bind(tab, 'click', function(e) {
					_this._onPagerClick(e);
				});
				this.content.pager.appendChild(tab);
			}
		}

		this.content.pager.next = this.tools.createElement('a', {
			href: 'javascript:void(0)',
			'data-tab': 'next'
		});
		this.content.pager.next.innerHTML = this.config.text.pager.next;

		if (this.local.pagerLastTab === 1) {
			this.content.pager.next.className = this.config.classNames.pagerInactiveTab;
		} else {
			this.tools.bind(this.content.pager.next, 'click', function(e) {
				_this._onPagerNextClick(e);
			});
		}

		this.content.pager.appendChild(this.content.pager.next);
		this.content.footer.appendChild(this.content.pager);

		this.local.pagerCurrentTab = 1;

		if (!this.config.limitpage) {
			this.local.cacheVersion = 1;
		}
	}
};

dpw.prototype._setPagerNav = function() {
	if (!this.local.pagerCurrentTab || this.local.pagerCurrentTab === this.config.cacheLoad * this.local.cacheVersion) {
		return false;
	}
	this._onPagerClick({}, this.local.pagerCurrentTab);
	return true;
};

dpw.prototype._onPagerClick = function(e, page) {
	var _this = this;
	var target = e.target || e.srcElement;

	if (this.local.request || (typeof target !== 'undefined' && (parseInt(target.getAttribute('data-page')) === this.local.pagerCurrentTab))) {
		return false;
	}

	this._toggleLoader(true);
	page = page || parseInt(target.getAttribute('data-page'));

	var limit = this.local.limitItems;
	var offset;

	if (this.config.sort === 'random') {
		this.config.cacheLoad = this.config.randomLoad;
	}

	var search = this.local.searchQuery;
	var query = this._getSearchQuery();

	this.local.pagerCurrentTab = page;

	var tabSlice = (page - 1) % this.config.cacheLoad;
	var sliceStart = tabSlice * parseInt(this.local.limitItems);
	var sliceStop = sliceStart + parseInt(this.local.limitItems);

	var cacheVersion = Math.ceil(page / this.config.cacheLoad);
	if (this.local.cacheItems && limit < 50 && this.local.cacheVersion === cacheVersion) {
		var cacheItems = JSON.parse(this.local.cacheItems);
		this._itemInit({
			result: cacheItems.slice(sliceStart, sliceStop),
			count: this.local.count
		});
	} else {
		delete this.local.cacheItems;

		if (this.local.cacheLimit) {
			if ((Math.ceil(page / this.config.cacheLoad) * this.local.cacheLimit) === this.local.cacheLimit) {
				offset = 0;
			} else {
				offset = Math.ceil(page / this.config.cacheLoad) * this.local.cacheLimit;
			}
		} else {
			offset = (page - 1) * limit;
		}

		if (page === this.local.pagerLastTab || page >= this.local.pagerLastTab - this.config.cacheLoad) {
			offset = offset - this.local.cacheLimit;
		}

		switch (this.config.feedtype) {
			case 'favourites':
				this._apiGetLightbox(query, limit, {offset: offset});
				break;
			case 'search':
			default:
				offset = offset ? '&dp_search_offset=' + offset : false;
				if (!search) {
					this._apiExecuteSearch(query, this.config.feedtype, limit, offset);
				} else {
					search = JSON.parse(search);
					this._apiExecuteSearch(search.query, search.type, limit, offset);
				}
				break;
		}

		this.local.cacheVersion = cacheVersion;
	}

	this.tools.each(this.content.pager.getElementsByTagName('a'), function(elem) {
		if (elem.getAttribute('class') === _this.config.classNames.pagerCurrentTab) {
			_this.tools.removeClass(elem, _this.config.classNames.pagerCurrentTab);
		}
	});

	if (this.content.pager.querySelectorAll('a[data-page="' + page + '"]').length) {
		this.content.pager.querySelectorAll('a[data-page="' + page + '"]')[0].className = this.config.classNames.pagerCurrentTab;

		if (this.content.pager.setPage) {
			this.content.pager.setPage.value = '';
			this.tools.removeClass(this.content.pager.setPage, this.config.classNames.pagerCurrentTab);
			this._pagerSetInputWidth();
		}
	} else {
		if (this.content.pager.setPage) {
			this.tools.addClass(this.content.pager.setPage, this.config.classNames.pagerCurrentTab);
		}
	}

	if (page > 1) {
		this.tools.removeClass(this.content.pager.back, this.config.classNames.pagerInactiveTab);
	} else {
		this.tools.addClass(this.content.pager.back, this.config.classNames.pagerInactiveTab);
	}

	if (page == this.local.pagerLastTab) {
		this.tools.addClass(this.content.pager.next, this.config.classNames.pagerInactiveTab);
	} else {
		this.tools.removeClass(this.content.pager.next, this.config.classNames.pagerInactiveTab);
	}

	if (this.local.pagerLastTab >= 5) {
		return;
	}

	var reg = new RegExp(this.config.classNames.pagerCurrentTab, 'g');

	if (this.content.pager.setPage && (this.content.pager.querySelectorAll('a[class="' + this.config.classNames.pagerCurrentTab + '"]').length && (this.content.pager.setPage.className.search(reg) === -1))) {
		this.content.pager.setPage.value = '';
		this.tools.removeClass(this.content.pager.setPage, this.config.classNames.pagerCurrentTab);
	}
};

dpw.prototype._onPagerPrevClick = function() {
	var prevTab = this.local.pagerCurrentTab - 1;

	if (!prevTab) {
		return false;
	}

	this._onPagerClick(false, prevTab);

	if (!this.content.pager.querySelectorAll('a[data-page="' + prevTab + '"]').length) {
		this.content.pager.setPage.value = prevTab;
	} else {
		if (this.local.pagerLastTab >= 5) {
			this.content.pager.setPage.value = '';
		}
	}

	this._pagerSetInputWidth();
};

dpw.prototype._onPagerNextClick = function() {
	var nextTab = this.local.pagerCurrentTab + 1;

	if (this.local.pagerCurrentTab == this.local.pagerLastTab) {
		return false;
	}

	this._onPagerClick(false, nextTab);

	if (!this.content.pager.querySelectorAll('a[data-page="' + nextTab + '"]').length) {
		this.content.pager.setPage.value = nextTab;
	} else {
		if (this.content.pager.setPage) {
			this.content.pager.setPage.value = '';
		}
	}

	this._pagerSetInputWidth();
};

dpw.prototype._onPagerSetPageKeyup = function(e) {
	var target = e.target || e.srcElement;
	var value = parseInt(target.value);

	if (value < 0) {
		return e.target.value = '';
	}

	e.which = e.which || e.keyCode;

	target.maxLength = this.local.pagerLastTab.toString().length;

	if (value === 0 && e.which === 13) {
		this._onPagerClick(target, 1);
		target.blur();
	}

	if (value > this.local.pagerLastTab) {
		this._onPagerClick(target, this.local.pagerLastTab);
		target.blur();
	}

	if (e.which === 13 && !isNaN(value) && this.local.pagerCurrentTab !== value && value) {
		this._onPagerClick(target, value);
		target.blur();
	}

	this._pagerSetInputWidth();
};

dpw.prototype._pagerSetInputWidth = function() {
	var target = this.content.pager.setPage;
	if (!target) {
		return false;
	}

	if (target.value.length <= 1) {
		target.style.width = '20px';
	} else {
		target.style.width = 8 + (target.value.length * 7) + 'px';
	}
};

dpw.prototype._onPagerSetPageClick = function(e) {
	var _this = this;
	var target = e.target || e.srcElement;
	var position = this._pagerGetOffset(target);
	var top = position.top;
	var left = position.left;
	var helper = this.tools.createElement('div', {
		'class': _this.config.classNames.helper,
		style: _this.config.inlineStyle.helper.element
	});
	var helperPointer = this.tools.createElement('i', {style: _this.config.inlineStyle.helper.i});
	var helperPointerSecond = this.tools.createElement('i', {style: _this.config.inlineStyle.helper.childI});

	helperPointer.appendChild(helperPointerSecond);
	helper.appendChild(helperPointer);

	var helperText = document.createTextNode(_this.config.text.helper);
	helper.appendChild(helperText);

	helper.style.opacity = '0';

	top = top + target.offsetHeight;

	if (this.iframe) {
		top += this._pagerGetOffset(this.iframe).top;
	}

	document.body.appendChild(helper);

	helper.style.top = top + (helperPointerSecond.offsetHeight / 2) + 'px';

	left = left - (helper.offsetWidth / 2) + (target.offsetWidth /2);

	if (this.iframe) {
		left += this.iframe.offsetLeft;
	}

	helper.style.left = left + 'px';
	helper.style.opacity = '1';
};

dpw.prototype._pagerGetOffset = function(elem) {
	var top = 0;
	var left = 0;

	while(elem) {
		top = top + parseFloat(elem.offsetTop);
		left = left + parseFloat(elem.offsetLeft);
		elem = elem.offsetParent;
	}

	return {
		top: Math.round(top),
		left: Math.round(left)
	};
};

dpw.prototype._onPagerSetPageBlur = function() {
	if (document.body.getElementsByClassName(this.config.classNames.helper).length) {
		while (document.body.getElementsByClassName(this.config.classNames.helper).length) {
			document.body.removeChild(document.body.querySelector('.' + this.config.classNames.helper));
		}
	}
};

dpw.prototype._pagerDestroy = function() {
	this.content.footer.innerHTML = '';

	if (!this.config.showportfolio && this.content.footer.querySelectorAll('[class="' + this.config.classNames.portfolio + '"]').length) {
		this.content.footer.removeChild(this.content.footer.querySelectorAll('[class="' + this.config.classNames.portfolio + '"]')[0]);
	}

	delete this.local.pagerLastTab;
	delete this.local.pagerCurrentTab;
	delete this.local.searchQuery;
};

dpw.prototype._getSearchQuery = function() {
	switch (this.config.feedtype) {
		case 'user':
			if (this.config.author) {
				return this.config.author;
			} else {
				return this._showError(this.config.text.failAuthor);
			}
			break;
		case 'categories':
			return this.config.categorylist;
			break;
		case 'search':
			return this.config.searchquery;
			break;
		case 'favourites':
			return this.config.favouritefolder;
			break;
	}

	return '';
};

dpw.prototype._arrangeTableItems = function(items) {
	var table = this.content.section.table;
	items = items || table.querySelectorAll('.dp-tr > div');

	table.innerHTML = '';
	this.local.rows = this._getRowsLen(true);
	for (var j = 0; j < items.length; j++) {
		if (j % this.local.rows === 0) {
			var tr = this.tools.createElement('div', {'class': this.config.classNames.tr});
			var len = j + this.local.rows;
			for (var i = j, len = items.length < len ? items.length : len; i < len; i++) {
				tr.appendChild(items[i]);
			}
			table.appendChild(tr);
		}
	}
};

dpw.prototype._itemInit = function(data, filteredNum) {
	var _this = this;
	if (!this.content.section) return;

	var table = this.content.section.table = this.tools.createElement('div', {
		'class': this.config.classNames.table,
		style: 'opacity: 0; height: ' + this.content.section.style.height
	});
	var result = data.result;
	var items = [];
	for (var i = 0; i < result.length; i++) {
		items.push(this._itemCreate(result[i]));
	}
	this._arrangeTableItems(items);

	this._toggleLoader(false);

	this.content.section.appendChild(table);

	setTimeout(function() {
		_this._showItems(undefined, table, 1);
	}, 350);

	if (!this.config.limitpage && data.count) {
		this.local.count = parseInt(data.count - 1);
		this._pagerInit();
	} else {
		if (!data.count) {
			this._showError(this.config.text.noResult);
			return false;
		}
	}

	this._itemLoadImages(table);

	if (this.config.feedtype === 'user' && this.config.showportfolio && result.length && this.content.footer.querySelectorAll('[class="' + _this.config.classNames.portfolio + '"]').length === 0) {
		var portfolio = this.tools.createElement('div', {'class': _this.config.classNames.portfolio});

		portfolio.innerHTML = this.config.text.portfolio + ': ';
		var portfolioLink = this.tools.createElement('a', {
			href: this._makeTagsUrl(this.local.trackingLink + 'http://'+ (this.config.lang === 'en' ? '' : this.config.lang + '.') +'depositphotos.com/portfolio-' + result[0].userid + '.html', 'portfolio', true),
			target: '_blank'
		});
		portfolioLink.innerHTML = this.config.author;
		portfolio.appendChild(portfolioLink);
		this.content.footer.appendChild(portfolio);
	}
	if (filteredNum) {
		this._pagerDestroy();
		this._pagerInit(filteredNum);
	}
};

dpw.prototype._itemLoadImages = function(table) {
	var _this = this;
	var thumbs = [];

	this.tools.each(table.getElementsByTagName('img'), function(thumbsImg) {
		thumbs.push(thumbsImg);
	});

	for (var i = 0; i < thumbs.length; i++) {
		if (i % this.local.rows === 0) {
			var rowsSplice = thumbs.slice(i, i + this.local.rows);

			for (var q = 0; q < rowsSplice.length; q++) {
				rowsSplice[q].style.visibility = 'hidden';
				rowsSplice[q].src = rowsSplice[q].getAttribute('data-thumb') + '?' + Math.random();
				rowsSplice[q].onload = function() {
					if (this.width < this.height) {
						this.style.height = this.width + 'px';
						this.style.width = 'auto';
					}
					this.style.visibility = 'visible';
					if (_this.config.preview) {
						_this._itemPreview(this);
					}
				}
			}
		}
	}
};

dpw.prototype._itemCreate = function(item) {
	var thumbBlock = this.tools.createElement('div', {'data-id': item.id});
	var span = this.tools.createElement('span');
	var link = this.local.trackingLink + item.itemurl;
	var isSqueezed = this._isSqueezedMode();
	var closestThumb = this.local.closestThumb;
	var linkParams = {
		href: this._makeTagsUrl(link, 'item', true),
		target: '_blank',
		style: (isSqueezed) ? 'width:' + this.local.closestThumb.thumbsize + 'px; height:' + this.local.closestThumb.thumbsize + 'px;' :
			'width:' + closestThumb.thumb + 'px; height:' + closestThumb.thumb +'px;'
	};
	if (this.config.nofollow === true) linkParams.rel = 'nofollow';

	var thumbLink = this.tools.createElement('a', linkParams);
	var thumb = new Image();

	if (item.itype === 'video') {
		thumb.style.width = closestThumb.thumbsize + 'px';
	}

	if (this.config.thumbsize === 'specify_size'){
		thumb.style.width = closestThumb.thumbsize + 'px';
		thumbLink.style.width = closestThumb.thumbsize + 'px';
		thumbLink.style.height = (closestThumb.thumb / (closestThumb.thumb / closestThumb.thumbsize)).toFixed(0) + 'px';
	}

	thumb.setAttribute('data-thumb', item[this.config.thumb_sizes.previewNamespace[closestThumb.thumb]]);

	if (closestThumb.previewThumb) {
		thumb.setAttribute('data-big-thumb', item[this.config.thumb_sizes.previewNamespace[closestThumb.previewThumb]]);
	}

	if (isSqueezed) {
		thumb.style.width = this.local.closestThumb.thumbsize + 'px';
	}

	thumb.alt = item.title;

	span.appendChild(thumb);
	thumbLink.appendChild(span);
	thumbBlock.appendChild(thumbLink);
	return thumbBlock;
};

dpw.prototype._closestThumb = function() {
	var request_thummbs = Object.keys(this.config.thumb_sizes.previewNamespace);
	var curr;
	var previewThumb;
	var thumbsize;

	switch(parseInt(this.config.thumbsize) || this.config.thumbsize) {
		case 'specify_size':
			thumbsize = this.config.specify_size;

			switch(true) {
				case thumbsize <= this.config.thumb_sizes.minSize:
					thumbsize = this.config.thumb_sizes.minSize;
					break;
				case thumbsize >= this.config.thumb_sizes.maxSize:
					thumbsize = this.config.thumb_sizes.maxSize;
					break;
			}

			if (this.local.videoType && thumbsize >= this.config.thumb_sizes.videoMaxSize) {
				thumbsize = this.config.thumb_sizes.videoMaxSize;
			}
			break;
		case 110:
		case 170:
			thumbsize = this.config.thumbsize;
			break;
		default:
			thumbsize = 110;
			break;
	}

	for (var q = 0; q<request_thummbs.length; q++) {
		if (thumbsize <= request_thummbs[q]) {
			curr = request_thummbs[q];
			if (parseInt(request_thummbs[q]) <= 450) {
				previewThumb = "450";
			} else {
				this.config.preview = false;
				previewThumb = "";
			}
			break;
		}
	}

	if (this._isSqueezedMode()) {
		thumbsize = this.config.feedheight - this.config.cssProps.marginError - this.config.cssProps.borderError;
	}

	this.local.closestThumb = {
		thumb: parseInt(curr),
		thumbsize: thumbsize,
		previewThumb: previewThumb
	};
};

dpw.prototype._itemPreview = function(thumb) {
	var _this = this;
	var timer;

	thumb.tips = new dpwTips(thumb, _this);

	this.tools.bind(thumb, 'mouseover', function() {
		timer = setTimeout(function() {
			thumb.tips.show(thumb.tips, _this);
		}, 300);

		if (_this.config.format === 'iframe') {
			_this.tools.bind(_this.iframe, 'mouseout', function() {
				clearTimeout(timer);
				thumb.tips.hide(_this);
			});
		}
	});

	this.tools.bind(thumb, 'mouseout', function() {
		clearTimeout(timer);
		thumb.tips.hide(_this);
	});
};

dpw.prototype._itemPreviewPositions = function(target, img) {
	var docRect = document.documentElement.getBoundingClientRect();
	var clientRect = target.getBoundingClientRect();
	var top = clientRect.top + (target.height / 2) - (img.height / 2);
	var left = clientRect.left + target.offsetWidth;

	if (this.iframe) {
		var frameRecting = this.iframe.getBoundingClientRect();
		top = (clientRect.top + frameRecting.top + (target.height / 2)) - (img.height / 2);
		left = left + frameRecting.left;
	}

	if (window.pageYOffset) {
		top = top + window.pageYOffset;
		if ((top - window.pageYOffset) < 0) {
			top = window.pageYOffset;
		}
	} else {
		top = top + (document.documentElement || document.body.parentNode || document.body).scrollTop;
		if ((top - (document.documentElement || document.body.parentNode || document.body).scrollTop) < 0) {
			top = (document.documentElement || document.body.parentNode || document.body).scrollTop;
		}
	}

	if (left + img.width > docRect.right) {
		left = left - target.offsetWidth - img.width;
	}

	if (img.height + top > window.innerHeight + window.scrollY) {
		top = window.innerHeight + window.scrollY - img.height;
	}

	return {
		top: top,
		left: left
	};
};

dpw.prototype._formSearch = function(e) {
	e = e || window.event;

	if (e && e.preventDefault) {
		e.preventDefault();
	} else {
		e.returnValue = false;
	}

	var form = this.tools.isIE() ? e.srcElement.parentNode : e.target.parentNode;
	var searchInput = form[this.config.formNames.searchQuery];

	if (searchInput.value.length) {
		if (searchInput.value === '0') {
			return false;
		}

		this._toggleLoader(true);

		if (!this.config.limitpage) {
			this._pagerDestroy();
		}

		this.local.searchQuery = JSON.stringify({query: searchInput.value, type: false});

		var types = form.search_type ? form.search_type.value : false;

		if (types && types.length && types !== 'allFiles') {
			this.local.searchTypes = types.split('|');
		}
		else {
			if (types === 'allFiles') {
				this.local.searchTypes = 'allFiles';
			} else {
				delete this.local.searchTypes;
			}
		}

		this.config.feedtype = 'search';
		this._apiExecuteSearch(searchInput.value, false, this.local.limitItems, undefined, function() {

		});

		if (this.config.showportfolio) {
			this.config.showportfolio = false;
		}
	}

	return false;
};

dpw.prototype._apiGetLightbox = function(lightboxId, limit, params) {
	var _this = this;
	var url = this.config.apiCommands.favourites;
	var cacheLimit = this._setCacheLimit(limit);
	var defaultParams = {
		limit: cacheLimit,
		offset: '0',
		lightboxId: lightboxId
	};
	var unificateData = function(data) {
		var map = {
			thumb_large: 'large_thumb',
			thumb_huge: 'url2',
			thumb_max: 'url_big'
		};
		data.count = parseInt(data.count);
		data.result = data.items;
		for (var i = 0; i < data.result.length; i++) {
			var item = data.result[i];
			for (var j in map) {
				item[j] = item[j] ? item[j] : item[map[j]];
			}
		}
		return data;
	};
	var filterTypes = function(data) {
		var map = {
			'image': 'photo'
		};
		var len = data.result.length;
		for (var i = 0; i < data.result.length; i++) {
			var type = data.result[i]['itype'];
			type = map[type] || type;
			if (!_this.config[type] || (_this.config.editorial && !data.result[i]['iseditorial'])) {
				data.result.splice(i, 1);
				i--;
			}
		}
		data.countFiltered = len !== data.result.length ? data.result.length : 0;
		return data;
	};
	if (params) {
		for (var i in defaultParams) {
			params[i] = params[i] || defaultParams[i];
		}
	} else {
		params = defaultParams;
	}
	url = url.replace(/%(\w*)%/g, function(match, match2) {
		return params[match2];
	});
	if (!limit) {
		return this._showError(_this.config.text.smallSize);
	}
	if (!this.config.trackingLink) {
		return this._showError(_this.config.text.failTrackingLink);
	}
	this._apiXhr(url, function(data) {
		if (!data.error) {
			unificateData(data);
			filterTypes(data);

			var cache = _this._makeCache(data, limit, cacheLimit);
			if (!cache.length) return _this._showError(_this.config.text.noResult);
			if (_this._setPagerNav()) return;

			if (cacheLimit) {
				_this._itemInit({result: cache, count: data.count}, data.countFiltered);
			} else {
				_this._itemInit(data, data.countFiltered);
			}
		} else {
			_this._showError(data.error.errormsg);
		}
	});
};

dpw.prototype._apiExecuteSearch = function(query, type, limit, commands) {
	var _this = this;
	var apiCommands = this.config.apiCommands;

	if (type === 'user' && isNaN(query)) {
		type = 'username';
	}

	type = '&dp_search_' + (type && type !== 'search' ? type : 'query') + '=' + encodeURIComponent(query);

	var url = apiCommands.search + type;

	if (this.config.sort === 'random') {
		commands = apiCommands.offset + (!commands) ? 0 : (limit * this.config.randomLoad);
	}

	if (!this.config.limitpage) {
		var cacheLimit = this._setCacheLimit(limit);
	}

	url += apiCommands.limit + (this.local.cacheLimit ? this.local.cacheLimit : limit);

	var defCommands = ['photo', 'vector', 'video'];
	var i = -1;

	if (this.local.searchTypes) {
		var types = this.local.searchTypes;
		var cuttingCommands;

		if (types === 'allFiles') {
			while (++i < defCommands.length) {
				url += '&dp_search_' + defCommands[i] + '=' + true;
			}
		} else {
			while (++i  < types.length) {
				cuttingCommands = defCommands.indexOf(types[i]);
				defCommands.splice(cuttingCommands, 1);
				url += '&dp_search_' + types[i] + '=' + true;
			}
			i = -1;
			while (++i < defCommands.length) {
				url += '&dp_search_' + defCommands[i] + '=' + false;
			}
		}
	} else {
		while (++i < defCommands.length) {
			if (this.config[defCommands[i]]) {
				url += '&dp_search_' + defCommands[i] + '=' + this.config[defCommands[i]];
			} else {
				url += '&dp_search_' + defCommands[i] + '=' + false;
			}
		}
	}

	url += (commands ? commands : '') + apiCommands.sort + this.config.sort + apiCommands.editorial + (this.config.editorial ? this.config.editorial : false) + apiCommands.orientation;

	if (!(limit^0)) {
		return this._showError(_this.config.text.smallSize);
	}
	if (!this.config.trackingLink) {
		return this._showError(_this.config.text.failTrackingLink);
	}

	this._apiXhr(url, function(data) {
		if (!data.error) {

			var cache = _this._makeCache(data, limit, cacheLimit);
			if (!cache.length) return _this._showError(_this.config.text.noResult);
			if (_this._setPagerNav()) return;

			if (cacheLimit) {
				_this._itemInit({result: cache, count: data.count});
			} else {
				_this._itemInit(data);
			}
		} else {
			_this._showError(data.error.errormsg);
		}
	});
};

dpw.prototype._setCacheLimit = function(limit) {
	var cacheLimit = this.config.sort === 'random' ? limit * this.config.randomLoad : limit * this.config.cacheLoad;
	if (cacheLimit > 200) cacheLimit = 200;
	return this.local.cacheLimit = cacheLimit;
};

dpw.prototype._makeCache = function(data, limit, cacheLimit) {
	if (!data.result || !data.result.length) return [];

	var response;
	if (this.config.sort === 'random') {
		data.result = this.tools.shuffle(data.result);
	}

	switch (true) {
		case cacheLimit / limit === this.local.pagerCurrentTab:
			response = data.result.slice(cacheLimit - limit, this.local.cacheLimit);
			break;
		case this.local.pagerCurrentTab && this.local.pagerCurrentTab === this.local.pagerLastTab:
			response = data.result.slice(data.result.length - limit, data.result.length);
			break;
		case this.local.pagerCurrentTab >= this.local.pagerLastTab - this.config.cacheLoad:
			response = data.result.slice(data.result.length - limit*2, data.result.length - limit);
			break;
		default:
			response = data.result.slice(0, limit);
			break;
	}

	if (response[0].itype === 'video' &&
		this.config.thumbsize === 'specify_size' && this.config.specify_size > this.config.thumb_sizes.videoMaxSize) {
		this._destroyWidget();
		this.init();
		this.local.videoType = true;
		this.config.specify_size = this.config.thumb_sizes.videoMaxSize;
	} else {
		this.local.videoType = false;
	}

	this.local.cacheItems = JSON.stringify(data.result);
	return response;
};

dpw.prototype._apiXhr = function(command, callback) {
	var _this = this;
	if (this.local) this.local.request = true;

	var	url = (this.config.host ? this.config.host : this.config.apiCommands.host) + '?dp_apikey=' + this.config.apiKey + (this.config.lang ? ('&dp_lang=' + this.config.lang) : '') + command;
	var handler = function(response) {
		delete _this.local.request;

		if (!response.error) {
			return callback(response);
		} else {
			_this._showError(response.error.errormsg + (response.error.field ? ', field - ' + response.error.field : '!'));
		}
	};

	this._sendAjax(url, handler);
};

dpw.prototype._sendAjax = function(url, success) {
	var xhr = null;
	var xdr = null;

	if (this.tools.isIE() >= 8 && window.XDomainRequest) {
		xdr = new XDomainRequest();
	} else {
		if (window.XMLHttpRequest || window.ActiveXObject) {
			if (window.ActiveXObject) {
				try {
					xhr = new ActiveXObject("Msxml2.XMLHTTP");
				} catch(e) {
					xhr = new ActiveXObject("Microsoft.XMLHTTP");
				}
			} else {
				xhr = new XMLHttpRequest();
			}
		} else {
			throw new Error("Your browser doesn't support XMLHTTPRequest!");
			return null;
		}
	}

	if (xhr) {
		xhr.open('GET', url, true);
		xhr.onreadystatechange = function() {
			if (xhr.readyState != 4) {
				return;
			}
			success(JSON.parse(xhr.responseText));
		}
		xhr.send(null);
	} else {
		xdr.open('GET', url);
		xdr.onload = function() {
			success(JSON.parse(xdr.responseText));
		};
		xdr.send(null);
	}

};

dpw.prototype._toggleLoader = function(show, element) {
	element = element || this.content.section;

	if (show) {
		if (element.hasChildNodes()) {
			element.innerHTML = '';
		}

		var loader = this.tools.createElement('img', {
			src: this.config.links.loader,
			'class': this.config.classNames.loader
		});

		element.appendChild(loader);
	} else {
		if (element.querySelectorAll('img[class="' + this.config.classNames.loader + '"]').length) {
			element.removeChild(element.querySelectorAll('img[class="' + this.config.classNames.loader + '"]')[0]);
		}
	}
};

dpw.prototype._showItems =  function(toggle, block, ms, callback) {
	if (typeof toggle === 'undefined') {
		return block.style.opacity = 1;
	}

	var i = toggle === 'in' ? 0 : 9;

	block.style.opacity = toggle === 'in' ? 0 : 1;

	var timer = setInterval(function() {
		block.style.opacity = 0 + '.' + i;

		if ((toggle === 'in' && i === 10) || (toggle === 'out' && i === 0)) {
			clearInterval(timer);
			if (toggle === 'in') {
				block.style.opacity = 1;
			}
			if (callback) {
				callback(block);
			}
		}

		(toggle === 'in') ? i++ : i--;
	}, ms);
};

dpw.prototype._showError = function(text) {
	var block = this.tools.createElement('div', {'class': this.config.classNames.error});

	block.innerHTML = text;
	this.content.section.innerHTML = '';

	if (this.content.footer) {
		this.content.footer.innerHTML = '';
	}
	this.content.section.appendChild(block);
};

var dpwTips = function(item, _dpw) {
	this.thumb = item;
	this.preview = _dpw.tools.createElement('div', {style: 'position: absolute; z-index: 10000;'});

	this.img = _dpw.tools.createElement('img', {
		src: this.thumb.getAttribute('data-big-thumb'),
		style: 'border: 3px solid #737373'
	});
};

dpwTips.prototype.show = function(target, _dpw) {
	var offsets = _dpw._itemPreviewPositions(this.thumb, this.img);

	if (typeof offsets.top !== 'undefined') {
		this.preview.style.top = offsets.top + 'px';
	} else {
		this.preview.style.top = 'inherit';
	}

	if (typeof offsets.left !== 'undefined') {
		this.preview.style.left = offsets.left + 'px';
	} else {
		this.preview.style.left = 'inherit';
	}

	this.preview.appendChild(this.img);

	document.body.appendChild(this.preview);

	_dpw._showItems('in', this.preview, 2);
};

dpwTips.prototype.hide = function(_dpw) {
	var preview = this.preview;

	_dpw._showItems('out', preview, 2, function(target) {
		if (preview.parentNode) {
			preview.parentNode.removeChild(preview);
		}
	});
};

var dpwSearchType = function(_dpw, element) {
	var _this = this;

	this.element = element;
	this.wid = _dpw.config.wid;
	this.dpw = _dpw;

	var menu = _dpw.tools.createElement('menu', {
		id: 'dp_search_tip_' + this.wid,
		style: 'position: absolute; z-index: 99999; border: 1px solid #c8c8c8; border-top: none; margin: 0; padding: 6px 0; background-color: #fff;'
	});

	this.typesImgOffset = {
		height: '13px',
		photo: {backgroundPosition: '-1px -1px', width: '14px'},
		vector: {backgroundPosition: '-15px -1px', width: '17px'},
		video: {backgroundPosition: '-35px -1px', width: '15px'}
	};

	Object.keys(_dpw.config.text.searchTypes).forEach(function(prop) {
		var li = _dpw.tools.createElement('li', {
			style: _dpw.config.inlineStyle.searchType.li,
			'data-name': prop
		});
		var label = _dpw.tools.createElement('label', {style: _dpw.config.inlineStyle.searchType.label});
		var input = _dpw.tools.createElement('input', {
			type: 'checkbox',
			style: _dpw.config.inlineStyle.searchType.input
		});
		var span = _dpw.tools.createElement('span', {style: _dpw.config.inlineStyle.searchType.span});

		span.innerHTML = _dpw.config.text.searchTypes[prop];

		label.appendChild(input);

		if (prop !== 'allFiles') {
			var img = _dpw.tools.createElement('i', {style: 'background: url("' + _dpw.config.links.searchTypeImg + '") no-repeat; background-position: ' +
				_this.typesImgOffset[prop]['backgroundPosition'] + '; width: ' + _this.typesImgOffset[prop]['width'] + '; height: ' +
				_this.typesImgOffset['height'] + '; ' + _dpw.config.inlineStyle.searchType.img});
			label.appendChild(img);
		} else {
			li.setAttribute('data-check', true);
			input.setAttribute('checked', true);
		}

		label.appendChild(span);
		li.appendChild(label);

		_this.dpw.tools.bind(li, 'mouseover', function() {
			li.style.backgroundColor = '#f0f0f0';
		});
		_this.dpw.tools.bind(li, 'mouseleave', function() {
			li.style.backgroundColor = '#fff';
		});

		_this.dpw.tools.bind(label, 'click', function(e) {
			if (e.stopPropagation) {
				e.stopPropagation();
			} else {
				e.returnValue = false;
			}

			if (_this.dpw.tools.isIE() !== 8 && e.target.nodeName !== 'INPUT') {
				return;
			}

			_this.menuClick(label);
		});

		menu.appendChild(li);
	});

	this.menu = menu;
	this.dpw.menuId = menu.id;
};

dpwSearchType.prototype.show = function(e) {
	var _this = this;

	if (e.stopPropagation) {
		e.stopPropagation();
	} else {
		e.returnValue = false;
	}

	var position = this.dpw._pagerGetOffset(this.element);

	var top;
	var left;

	top = position.top + this.element.offsetHeight;
	left = position.left;

	if (this.dpw.iframe) {
		top += this.dpw._pagerGetOffset(this.dpw.iframe).top;
		left += this.dpw._pagerGetOffset(this.dpw.iframe).left;
	}

	this.menu.style.top = top + 'px';
	this.menu.style.left = left + 'px';

	if (!document.getElementById('dp_search_tip_' + this.dpw.config.wid)) {
		document.body.appendChild(this.menu);
	} else {
		document.getElementById('dp_search_tip_' + this.dpw.config.wid).style.visibility = 'visible';
	}

	if (this.dpw.iframe) {
		this.hideMenu(this.dpw.general);
	}

	this.hideMenu(document.body);
};

dpwSearchType.prototype.hideMenu = function(element) {
	var _this = this;

	this.dpw.tools.bind(element, 'click', function(e) {
		if (_this.dpw.tools.isIE() === 8 && ((e.srcElement.offsetParent.nodeName === 'FORM' && e.srcElement.offsetParent.name === 'search_form') || e.srcElement.offsetParent.nodeName === 'MENU')) {
			return false;
		} else {
			if (!_this.menu.style.visibility.length || _this.menu.style.visibility === 'visible') {
				_this.menu.style.visibility = 'hidden';
				_this.dpw.tools.removeClass(_this.element.querySelector('[data-event="opener"]'), _this.dpw.config.classNames.searchTypeOpener);
			}
		}
	});
};

dpwSearchType.prototype.menuClick = function(label) {
	var _this = this;
	var i;

	if (this.dpw.tools.isIE === 8 && !label.childNodes.item('input').checked || this.dpw.tools.isIE !== 8 && label.childNodes.item('input').checked) {
		label.parentNode.setAttribute('data-check', true);
		label.childNodes.item('input').checked = true;
	} else {
		label.parentNode.removeAttribute('data-check');
		label.childNodes.item('input').checked = false;
	}

	var lastWidth = parseInt(this.dpw.local.searchWidth.slice(0, -2));
	var checkedLength = 0;
	var allFiles;
	var allFilesInput;
	var menuChilds = this.menu.children;
	var searchInput = this.dpw.content.searchBar[this.dpw.config.formNames.searchQuery];

	this.dpw.tools.each(menuChilds, function(childs) {
		if (childs.getAttribute('data-name') !== 'allFiles' && childs.getAttribute('data-check')) {
			checkedLength++;
		}
		if (childs.getAttribute('data-name') === 'allFiles') {
			allFiles = childs;
			allFilesInput = childs.getElementsByTagName('input')[0];
		}
	});

	if (allFiles === label.parentNode) {
		checkedLength = 3;
	}

	if (checkedLength) {
		allFiles.removeAttribute('data-check');
		allFilesInput.checked = false;

		if (checkedLength === 3) {
			i = -1;
			this.dpw.tools.each(menuChilds, function(childs) {
				if (childs.getAttribute('data-check')) {
					childs.getElementsByTagName('input')[0].checked = false;
					childs.removeAttribute('data-check');
				}
			});

			allFiles.setAttribute('data-check', true);
			allFilesInput.checked = true;

			this.dpw.tools.each(this.element.getElementsByTagName('i'), function(elems) {
				if (elems.hasAttribute('data-type')) {
					elems.removeAttribute('style');
				}
			});

			searchInput.style.width = lastWidth + 'px';
		} else {
			var iNames = [];
			var hiddenWidth = 0;

			this.dpw.tools.each(this.menu.getElementsByTagName('li'), function(elems) {
				if (elems.hasAttribute('data-check')) {
					iNames.push(elems.getAttribute('data-name'));
				}
			});

			this.dpw.tools.each(this.element.getElementsByTagName('i'), function(checks) {
				if (checks.hasAttribute('data-type')) {
					checks.style.display = 'none';
					if (iNames.indexOf(checks.getAttribute('data-type')) !== -1) {
						checks.removeAttribute('style');
					} else {
						if (checks.hasAttribute('data-type')) {
							if (_this.dpw.tools.isIE() === 8) {
								hiddenWidth += parseInt(checks.currentStyle.width) + parseInt(checks.currentStyle.marginRight);
							} else {
								hiddenWidth +=  parseInt(getComputedStyle(checks, null).width) + parseInt(getComputedStyle(checks, null).marginRight);
							}
						}
					}
				}
			});

			searchInput.style.width = lastWidth + hiddenWidth + 'px';
		}
	} else {
		searchInput.style.width = lastWidth + 'px';
		allFiles.setAttribute('data-check', true);
		allFilesInput.checked = true;

		this.dpw.tools.each(this.element.getElementsByTagName('i'), function(elems) {
			if (elems.hasAttribute('data-type')) {
				elems.removeAttribute('style');
			}
		});
	}

	var checkArray = [];
	this.dpw.tools.each(this.menu.getElementsByTagName('li'), function(elems) {
		if (elems.hasAttribute('data-check')) {
			checkArray.push(elems.getAttribute('data-name'));
		}
	});

	this.element.parentNode.children.search_type.value = checkArray.join('|');
};

if (typeof String.prototype.trim !== 'function') {
	String.prototype.trim = function() {
		return this.replace(/^\s+|\s+$/g, '');
	}
}

if (!Array.prototype.indexOf) {
	Array.prototype.indexOf = function(obj, start) {
		for (var i = (start || 0), j = this.length; i < j; i++) {
			if (this[i] === obj) {
				return i;
			}
		}
		return -1;
	}
}

if (!Object.keys) {
	Object.keys = (function() {
		var hasOwnProperty = Object.prototype.hasOwnProperty;
		var hasDontEnumBug = !({toString: null}).propertyIsEnumerable('toString');
		var dontEnums = ['toString', 'toLocaleString', 'valueOf', 'hasOwnProperty', 'isPrototypeOf', 'propertyIsEnumerable', 'constructor'];
		var dontEnumsLength = dontEnums.length;

		return function (obj) {
			if (typeof obj !== 'object' && (typeof obj !== 'function' || obj === null)) {
				throw new TypeError('Object.keys called on non-object');
			}

			var result = [];
			var prop;
			var i;

			for (prop in obj) {
				if (hasOwnProperty.call(obj, prop)) {
					result.push(prop);
				}
			}

			if (hasDontEnumBug) {
				for (i = 0; i < dontEnumsLength; i++) {
					if (hasOwnProperty.call(obj, dontEnums[i])) {
						result.push(dontEnums[i]);
					}
				}
			}
			return result;
		};
	}());
}

if (!Array.prototype.forEach){
	Array.prototype.forEach = function(fun) {
		if (this === void 0 || this === null) {
			throw new TypeError();
		}

		var t = Object(this);
		var len = t.length >>> 0;

		if (typeof fun !== 'function') {
			throw new TypeError();
		}

		var thisArg = arguments.length >= 2 ? arguments[1] : void 0;

		for (var i = 0; i < len; i++) {
			if (i in t) {
				fun.call(thisArg, t[i], i, t);
			}
		}
	};
}

if (!document.getElementsByClassName) {
	var indexOf = [].indexOf || function(prop) {
		for (var i = 0; i < this.length; i++) {
			if (this[i] === prop) {
				return i;
			}
		}
		return -1;
	};

	getElementsByClassName = function(className, context) {
		var elems = document.querySelectorAll ? context.getElementsByClassName(className) : (function() {
			var all = context.getElementsByTagName('*');
			var elements = [];
			var i = 0;

			for (; i < all.length; i++) {
				if (all[i].className && (' ' + all[i].className + ' ').indexOf(' ' + className + ' ') > -1 && indexOf.call(elements,all[i]) === -1) {
					elements.push(all[i]);
				}
			}

			return elements;
		})();
		return elems;
	};

	document.getElementsByClassName = function(className) {
		return getElementsByClassName(className, document);
	};

	Element.prototype.getElementsByClassName = function(className) {
		return getElementsByClassName(className, this);
	};
}

(function() {
	setTimeout(function() {
		if (typeof dpConfig !== 'undefined') {
			new dpw(dpConfig).init();
		}
	}, 100);
})();