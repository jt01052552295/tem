var MARIO = MARIO || {};
MARIO.DEBUG = !0, 
MARIO.$window = $(window), 
MARIO.$html = $("html"), 
MARIO.$body = $("body"), 
MARIO.SCENE_LENGTH = 5, 
MARIO.BASE_WIDTH = 1280, 
MARIO.BASE_HEIGHT = 700, 
MARIO.BASE_RATIO = MARIO.BASE_WIDTH / MARIO.BASE_HEIGHT, 
MARIO.INTERVAL = 600, 
MARIO.CX = MARIO.BASE_WIDTH / 2, 
MARIO.CY = MARIO.BASE_HEIGHT / 2, MARIO.DISTANCE = -(MARIO.BASE_WIDTH + MARIO.INTERVAL), MARIO.isOpening = !1, MARIO.width = MARIO.$body.width(), MARIO.height = MARIO.$body.height(), AMP.Youtube.install(), jQuery(function(e) {
        new MARIO.Main
    }),
    function() {
        var e = new AMP.Events;
        e.EVENTS = {
            CHANGE: "change",
            COMPLETE: "complete"
        }, MARIO.event = MARIO.event || {}, MARIO.event.mediator = e
    }(),
    function() {
        function e() {
            e.BaseClass_constructor.call(this), this.loader = new PIXI.loaders.Loader
        }
        AMP.inherits(e, AMP.BaseClass);
        var t = e.prototype;
        e.ROOT = "../img/stage/", 
        e.IMAGES = ["flower01.png", "flower02.png", "flower03.png", "ground.png", "pipe01.png", "pipe02.png", "pipe03.png", "item01.png", "item02.png", "item03.png", "chara01.png", "chara02.png", "chara03.png", "chara04.png", "chara05.png", "chara06.png", "chara08.png", "mario01.png", "mario02.png", "mario03.png", "kuribo01.png", "bg01.mp4", "bg01.jpg", "bg02.jpg", "bg03.jpg", "bg04.jpg"], e.PRELOAD_IMAGES = ["../img/common/sec04_modal01_bg.png", "../img/common/sec04_modal02_bg.png", "../img/common/pager_bg01.png", "../img/common/pager_dot.png"], 
        e.COURSE_ITEMS = [{
            isReflect: !0,
            image: "flower01.png",
            point: {
                x: -40,
                y: 481
            }
        }, {
            isReflect: !0,
            image: "flower03.png",
            point: {
                x: 1021,
                y: 545
            }
        }, {
            image: "flower03.png",
            point: {
                x: 1711,
                y: 545
            }
        }, {
            image: "flower01.png",
            point: {
                x: 2881,
                y: 481
            }
        }, {
            image: "flower02.png",
            point: {
                x: 3290,
                y: 491
            }
        }, {
            image: "flower01.png",
            point: {
                x: 3964,
                y: 545
            }
        }, {
            image: "flower03.png",
            point: {
                x: 5811,
                y: 545
            }
        }, {
            image: "flower03.png",
            point: {
                x: 7426,
                y: 545
            }
        }, {
            image: "flower03.png",
            point: {
                x: 9530,
                y: 545
            }
        }, {
            isReflect: !0,
            image: "ground.png",
            point: {
                x: -55,
                y: 544
            }
        }, {
            image: "ground.png",
            point: {
                x: 1596,
                y: 544
            }
        }, {
            isReflect: !0,
            image: "ground.png",
            point: {
                x: 3254,
                y: 544
            }
        }, {
            isReflect: !0,
            image: "ground.png",
            point: {
                x: 5440,
                y: 544
            }
        }, {
            image: "ground.png",
            point: {
                x: 7231,
                y: 544
            }
        }, {
            image: "ground.png",
            point: {
                x: 9115,
                y: 544
            }
        }, {
            image: "pipe03.png",
            point: {
                x: 1419,
                y: 445
            }
        }, {
            image: "pipe02.png",
            point: {
                x: 3075,
                y: 349
            }
        }, {
            image: "pipe02.png",
            point: {
                x: 4950,
                y: 440
            }
        }, {
            image: "pipe03.png",
            point: {
                x: 5260,
                y: 545
            }
        }, {
            image: "pipe02.png",
            point: {
                x: 6920,
                y: 467
            }
        }, {
            image: "pipe03.png",
            point: {
                x: 8709,
                y: 349
            }
        }, {
            image: "pipe02.png",
            point: {
                x: 8936,
                y: 253
            }
        }, {
            image: "pipe02.png",
            point: {
                x: 10590,
                y: 349
            }
        }, {
            image: "item02.png",
            point: {
                x: 3577,
                y: 184
            }
        }, {
            image: "item01.png",
            point: {
                x: 5469,
                y: 100
            }
        }, {
            image: "item02.png",
            point: {
                x: 7159,
                y: 184
            }
        }, {
            image: "item03.png",
            point: {
                x: 7716,
                y: 312
            }
        }, {
            image: "item03.png",
            point: {
                x: 7802,
                y: 228
            }
        }, {
            image: "chara04.png",
            point: {
                x: 1414,
                y: 221
            }
        }, {
            image: "chara02.png",
            point: {
                x: 3428,
                y: 416
            }
        }, {
            image: "chara04.png",
            point: {
                x: 4945,
                y: 216
            }
        }, {
            image: "chara05.png",
            point: {
                x: 5468,
                y: 361
            }
        }, {
            image: "chara02.png",
            point: {
                x: 7722,
                y: 472
            }
        }, {
            image: "chara01.png",
            point: {
                x: 9313,
                y: 518
            }
        }, {
            image: "chara06.png",
            point: {
                x: 8437,
                y: 214
            }
        }], e.EVENTS = {
            COMPLETE: "complete"
        }, t.load = function() {
            for (var t = this, i = new $.Deferred, n = 0, s = e.IMAGES.length; n < s; n += 1) {
                var a = e.IMAGES[n].split("/");
                this.loader.add(a[a.length - 1], e.ROOT + e.IMAGES[n])
            }
            return AMP.each(e.PRELOAD_IMAGES, function(e) {
                t.loader.add(e)
            }), this.loader.once("complete", function(e) {
                t.trigger("complete"), MARIO.event.mediator.trigger("assetManagerComplete"), i.resolve()
            }), this.loader.load(), i.promise()
        }, t.createCourseSprites = function(t) {
            t = t || $.noop;
            for (var i = 0, n = e.COURSE_ITEMS.length; i < n; i += 1) {
                var s = e.COURSE_ITEMS[i],
                    a = this.loader.resources[s.image],
                    o = PIXI.Texture.fromImage(a.url),
                    r = new PIXI.Sprite(o);
                r.x = s.point.x, r.y = s.point.y, s.isReflect && (r.pivot.x = a.data.width, r.scale.x = -1), t(r)
            }
            return this
        }, t.getFile = function(e) {
            return this.loader.resources[e]
        }, MARIO.loader = MARIO.loader || {}, MARIO.loader.AssetManager = e
    }(),
    function() {
        function e() {
            this._init(), MARIO.utils.cmn(), e.loader = new AMP.$.Loader, e.assetManeger = new MARIO.loader.AssetManager, e.language = new MARIO.view.Language, e.poricy = new MARIO.view.Poricy, e.price = new MARIO.view.Price, e.stage = new MARIO.stage.StageManager, e.scene = new MARIO.scene.SceneManeger, e.opening = new MARIO.tween.Opening, this.start()
        }
        var t = e.prototype;
        t._init = function() {
            MARIO.$window.on("resize.Main", function() {
                MARIO.width = MARIO.$body.width(), MARIO.height = MARIO.$body.height()
            })
        }, t.start = function() {
            $.sequence(function() {
                return e.opening.load()
            }, function() {
                e.stage.setup()
            }, function() {
                return e.opening.start()
            }, function() {
                MARIO.utils.cmn.attention()
            })
        }, MARIO.Main = e
    }(),
    function() {
        function e(e) {
            this.$scene = e, this.isTween = !1
        }
        var t = e.prototype;
        t.className = "SceneInterface", t.show = function() {}, t.hide = function() {}, MARIO.scene = MARIO.scene || {}, MARIO.scene.SceneInterface = e
    }(),
    function() {
        function e(t) {
            e.BaseClass_constructor.call(this), this.prev = null, this.current = t || 0, this.isTween = !1, this.scenes = [], this.distance = -(MARIO.width + MARIO.INTERVAL), this.$wrap = $(".sec_wrap"), this.$sec = this.$wrap.find(".sec");
            var i = $("#sec_ui");
            this.$prev = i.find(".btn_prev"), this.$next = i.find(".btn_next"), this.$pager = i.find(".pager"), this._init()
        }
        AMP.inherits(e, AMP.BaseClass);
        var t = e.prototype;
        e.PAGER_DISTANCE = 77, e.PAGER_END_X = e.PAGER_DISTANCE * (MARIO.SCENE_LENGTH - 1), t._init = function() {
            var e = this;
            this.showNavi(), this.$sec.each(function(t) {
                var i = $(this).attr("data-scene");
                MARIO.scene[i] ? e.scenes[t] = new MARIO.scene[i]($(this)) : e.scenes[t] = new MARIO.scene.SceneInterface($(this))
            }), this.$next.on("click", function() {
                return e._controller(e.current + 1), !1
            }), this.$prev.on("click", function() {
                return e._controller(e.current - 1), !1
            });
            var t = this.$pager.find("li");
            t.on("click", function() {
                return e._controller(t.index(this)), !1
            }), this.$wrap.on("flickcancelX", {
                hit: 250
            }, function() {
                return !(e.isTween || !MARIO.isOpening) && void e.tween()
            }).on("flickmoveX", function(t) {
                return !(e.isTween || !MARIO.isOpening) && void e.moveBG(t.moveX)
            }).on("flickX", {
                hit: 250
            }, function(t) {
                if (e.isTween || !MARIO.isOpening) return !1;
                var i = 0 < t.moveX ? e.current - 1 : e.current + 1; - 1 < i && i < MARIO.SCENE_LENGTH ? e._controller(i) : e.tween()
            }), this.resize(), MARIO.$window.resize(this.resize.bind(this))
        }, t.resize = function() {
            this.distance = -(MARIO.width + MARIO.INTERVAL), this.$wrap.css({
                width: (MARIO.width + MARIO.INTERVAL) * MARIO.SCENE_LENGTH,
                height: MARIO.height,
                left: this.distance * this.current
            }), this.$sec.css({
                width: MARIO.width,
                height: MARIO.height
            })
        }, t._controller = function(e) {
            if (e < 0 || MARIO.SCENE_LENGTH <= e || e === this.current || this.isTween) return !1;
            var t = this;
            this.isTween = !0, this.prev = this.current, this.current = e, MARIO.event.mediator.trigger("change", {
                prev: this.prev,
                next: this.current
            }), $.sequence(function() {
                return t.hideNavi(), t.scenes[t.prev].hide(), t.tween()
            }, function() {
                return t.scenes[t.current].show(), $.timer(200)
            }, function() {
                return MARIO.event.mediator.trigger("complete", {
                    prev: t.prev,
                    next: t.current
                }), t.showNavi()
            }, function() {
                t.isTween = !1
            })
        }, t.tween = function() {
            return MARIO.Main.stage.tween(), this.slideTween(), $.timer(850)
        }, t.movePager = function(t) {
            var i = e.PAGER_DISTANCE * this.current + t;
            i < 0 ? i = 0 : e.PAGER_END_X < i && (i = e.PAGER_END_X), this.$pager.find("img").css({
                left: i
            })
        }, t.moveBG = function(t) {
            MARIO.Main.stage.move(t), this.$wrap.css({
                left: this.distance * this.current + t
            });
            var i = t / (MARIO.width + MARIO.INTERVAL) * -e.PAGER_DISTANCE + e.PAGER_DISTANCE * this.current;
            i < 0 ? i = 0 : e.PAGER_END_X < i && (i = e.PAGER_END_X), this.$pager.find("img").css({
                left: i
            })
        }, t.slideTween = function() {
            return this.$wrap.velocity("stop").velocity({
                left: this.distance * this.current
            }, {
                duration: 1e3,
                easing: "easeInOutQuart"
            }), this.$pager.find("img").velocity("stop").velocity({
                left: e.PAGER_DISTANCE * this.current
            }, {
                duration: 1e3,
                easing: "easeInOutQuart"
            })
        }, t.hideNavi = function() {
            this.$next.velocity("stop").velocity({
                scale: 0
            }, {
                duration: 100,
                easing: "easeOutQuint"
            }), this.$prev.velocity("stop").velocity({
                scale: 0
            }, {
                duration: 100,
                easing: "easeOutQuint"
            })
        }, t.showNavi = function() {
            MARIO.SCENE_LENGTH - 1 != this.current && (this.current ? this.$next.find("img").removeClass("anime_btnBounce") : this.$next.find("img").addClass("anime_btnBounce"), this.$next.velocity({
                scale: 1
            }, {
                duration: 400,
                easing: "easeOutBack"
            })), 0 !== this.current && this.$prev.velocity("stop").velocity({
                scale: 1
            }, {
                duration: 400,
                easing: "easeOutBack"
            })
        }, MARIO.scene = MARIO.scene || {}, MARIO.scene.SceneManeger = e
    }(),
    function() {
        function e() {
            e.BaseClass_constructor.call(this), this.canvas = document.getElementById("bg"), this.renderer = PIXI.autoDetectRenderer(MARIO.width, MARIO.height, {
                view: this.canvas,
                transparent: !0,
                antialias: !0
            }), this.stage = new PIXI.Container, this.bg = new MARIO.stage.BackGround, this.course = new MARIO.stage.Course, this.mario = new MARIO.stage.Mario, this._init()
        }
        AMP.inherits(e, AMP.BaseClass);
        var t = e.prototype;
        t._init = function() {}, t.setup = function() {
            var e = this;
            this.stage.addChild(this.bg, this.course, this.mario), AMP.each(this.stage.children, function(e) {
                e.setup()
            }), MARIO.$window.resize(function() {
                e.resize()
            }), this._update()
        }, t._update = function() {
            AMP.requestAnimationFrame(this._update.bind(this)), this.renderer.render(this.stage)
        }, t.resize = function() {
            this.renderer.resize(MARIO.width, MARIO.height), AMP.each(this.stage.children, function(e) {
                e.resize()
            })
        }, t.tween = function(e) {
            this.course.tween(e), this.mario.tween(e)
        }, t.move = function(e) {
            this.course.move(e), this.mario.move(e)
        }, MARIO.stage = MARIO.stage || {}, MARIO.stage.StageManager = e
    }(),
    function() {
        function e() {
            e.BaseClass_constructor.call(this), this.$opening = $("#opening"), this.$loading = $("#loading"), this.$bg = $("#bg"), this.$sec01 = $("#sec01").find(".sec_inner"), this._init()
        }
        AMP.inherits(e, AMP.BaseClass);
        var t = e.prototype;
        t._init = function() {}, t.start = function() {
            var e = this;
            $.Velocity.Easings.bounce00 = AMP.Ease.createElasticOut(1, .5), $.Velocity.Easings.bounce01 = AMP.Ease.createElasticOut(1, .6), $.Velocity.Easings.bounce02 = AMP.Ease.createElasticOut(1, .7), $.Velocity.Easings.bounce03 = AMP.Ease.createElasticOut(1, .8), $.Velocity.Easings.back01 = AMP.Ease.createBackOut(1.7);
            var t = MARIO.width / 2.5,
                i = e.$opening.find("._num01"),
                n = e.$opening.find("._num02");
            return $.sequence(function() {
                return MARIO.$window.resize(), e.$loading.velocity({
                    left: MARIO.width / -2
                }, {
                    display: "none",
                    delay: 50,
                    duration: t,
                    easing: "easeOutCubic"
                }), i.css({
                    visibility: "visible",
                    left: MARIO.width + i.width() / 2
                }).velocity({
                    left: "50%"
                }, {
                    duration: t,
                    easing: "bounce01"
                }), e.$bg.velocity({
                    left: 0
                }, {
                    duration: t - 100,
                    easing: "easeOutQuint"
                }), MARIO.Main.stage.course.openingTween01(), $.timer(2200)
            }, function() {
                return t = MARIO.width / 2.5, i.velocity({
                    left: -(MARIO.width + i.width())
                }, {
                    display: "none",
                    delay: 250,
                    duration: MARIO.width,
                    easing: "easeOutCubic"
                }), n.css({
                    visibility: "visible",
                    left: MARIO.width + n.width() / 2
                }).velocity({
                    left: "50%"
                }, {
                    delay: MARIO.width / 5 - 50,
                    duration: t,
                    easing: "bounce01"
                }), $.timer(2200)
            }, function() {
                return MARIO.Main.stage.course.openingTween02(), MARIO.Main.stage.mario.openingTween01(), e.$opening.velocity({
                    scaleX: 1 / .338 * 1.5,
                    scaleY: 1 / .338 * 1.5
                }, {
                    display: "none",
                    duration: 1e3,
                    easing: "easeInOutQuart"
                }), $.timer(1e3)
            }, function() {
                var t = e.$sec01.find("h2"),
                    i = e.$sec01.find("figure"),
                    n = e.$sec01.find(".ico img"),
                    s = e.$sec01.find(".date img"),
                    a = e.$sec01.find(".cmn_delivery"),
                    o = a.find(".btn"),
                    r = e.$sec01.parent().find(".info"),
                    c = -e.$sec01.css("marginLeft").replace("px", "") - e.$sec01.width(),
                    h = -c;
                return t.css({
                    left: c
                }), i.velocity({
                    scale: 0,
                    opacity: 1
                }, 0), n.velocity({
                    scale: 0,
                    opacity: 1
                }, 0), s.velocity({
                    translateX: "-100%",
                    opacity: 1
                }, 0), a.css({
                    opacity: 0
                }), o.velocity({
                    scale: 0
                }, 0), e.$sec01.css({
                    visibility: "visible"
                }), t.velocity({
                    left: 0
                }, {
                    duration: h + 200,
                    easing: "bounce03"
                }), i.velocity({
                    scale: 1
                }, {
                    delay: h - 400,
                    duration: 600,
                    easing: "bounce02"
                }), n.velocity({
                    scale: 1
                }, {
                    delay: h - 200,
                    duration: 600,
                    easing: "bounce01"
                }), s.velocity({
                    translateX: 0
                }, {
                    delay: h - 100,
                    duration: 500,
                    easing: "easeOutQuart"
                }), a.velocity({
                    opacity: 1
                }, {
                    delay: h,
                    duration: 400,
                    easing: "easeInOutSine"
                }), o.velocity({
                    scale: 1
                }, {
                    delay: h + 200,
                    duration: 800,
                    easing: "bounce02"
                }), r.velocity({
                    bottom: 0
                }, {
                    delay: 3e3,
                    duration: 800,
                    easing: "easeInOutSine"
                }), $.timer(h + 1e3)
            }, function() {
                return MARIO.Main.stage.mario.openingTween02(), $.timer(1050)
            }, function() {
                var t = $("#sec_ui"),
                    i = t.find(".pager");
                return $.sequence(function() {
                    return i.velocity({
                        bottom: 16
                    }, {
                        duration: 600,
                        easing: "easeOutBack"
                    })
                }, function() {
                    return i.find("li").each(function(e) {
                        $(this).velocity({
                            left: 77 * e
                        }, {
                            visibility: "visible",
                            duration: 150 * e,
                            easing: "easeOutQuart"
                        })
                    }), i.find("ul").addClass("tween"), MARIO.Main.stage.bg && MARIO.Main.stage.bg.show(0), $.timer(1e3)
                }, function() {
                    $("header").find(".btn_lang").velocity({
                        left: -4
                    }, {
                        easing: "easeOutQuart"
                    }), t.find(".btn_next").velocity({
                        rotateZ: 270
                    }, 0).velocity({
                        right: 28,
                        rotateZ: 0
                    }, {
                        easing: "easeOutQuart"
                    })
                }, function() {
                    e.$sec01.find(".cmn_delivery .btn").addClass("btnBounce"), MARIO.isOpening = !0
                })
            })
        }, t.load = function() {
            function e() {
                var e = (n + s) / 4;
                i.css({
                    width: e + "%"
                }), 49 < e && t()
            }

            function t() {
                clearTimeout(o), i.velocity({
                    width: "100%"
                }, {
                    easing: "easeOutCubic",
                    duration: 1500,
                    complete: function() {
                        setTimeout(a.resolve.bind(a), 1200)
                    }
                })
            }
            var i = this.$loading.find(".progress"),
                n = 0,
                s = 0,
                a = a = new $.Deferred;
            MARIO.Main.loader.on("progress", function(t, i) {
                n = ~~(t.progressedCount / t.images.length * 100), e()
            }), MARIO.Main.assetManeger.loader.on("progress", function(t) {
                s = ~~t.progress, e()
            });
            var o = setTimeout(function() {
                n = s = 100, e()
            }, 15e3);
            return MARIO.Main.assetManeger.load(), MARIO.Main.loader.start(), a.promise()
        }, MARIO.tween = MARIO.tween || {}, MARIO.tween.Opening = e
    }(),
    function() {
        function e(t) {
            e.BaseClass_constructor.call(this), this.$slider = t, this.$li = t.find(".list li"), this.$pager = null, this.current = 0, this.max = this.$li.length, this.isTween = !1, this.timer = 5e3, this.timerId = null, this._init()
        }
        AMP.inherits(e, AMP.BaseClass);
        var t = e.prototype;
        t._init = function() {
            this.$li.eq(this.current).css({
                zIndex: this.max,
                opacity: 1
            }), this.setupPager()
        }, t.setupPager = function() {
            var e = this;
            if (this.max < 2) return !1;
            var t = this.$slider.find(".pager"),
                i = "";
            return AMP.each(this.$li.length, function() {
                i += "<li></li>"
            }), t.html(i), this.$pager = t.find("li"), this.$pager.eq(this.current).addClass("active"), this.$pager.on("click", function() {
                return $(this).hasClass("active") || (e.stop(), e._controller(e.$pager.index(this))), !1
            }), this
        }, t.start = function() {
            var e = this;
            return this.stop(), this.timerId = setTimeout(function() {
                e._controller(e.current + 1)
            }, this.timer), this
        }, t.stop = function() {
            return clearTimeout(this.timerId), this
        }, t._controller = function(e) {
            if (this.isTween) return !1;
            this.isTween = !0;
            var t = this.current;
            e < 0 ? e = this.max - 1 : e > this.max - 1 && (e = 0), this.current = e, this._tween(t, this.current)
        }, t._tween = function(e, t) {
            var i = this;
            this.$pager.removeClass("active").eq(t).addClass("active"), this.$li.eq(t).css({
                zIndex: this.max,
                opacity: 0
            }).velocity({
                opacity: 1
            }, 800, "easeOutSine"), this.$li.eq(e).css({
                zIndex: this.max - 1
            }).delay(800).addQ(function() {
                i.$li.eq(e).css({
                    zIndex: 1,
                    opacity: 0
                }), i.isTween = !1, i.start()
            })
        }, MARIO.ui = MARIO.ui || {}, MARIO.ui.Slider = e
    }(),
    function() {
        function e() {
            return navigator.userAgent.indexOf("WiiU") != -1
        }

        function t() {
            return navigator.userAgent.indexOf("Nintendo 3DS") != -1 && navigator.userAgent.indexOf("iPhone") != -1
        }

        function i() {
            return navigator.userAgent.indexOf("Nintendo 3DS") != -1 && navigator.userAgent.indexOf("iPhone") == -1
        }

        function n() {
            return navigator.userAgent.indexOf("Android") != -1
        }

        function s() {
            return navigator.userAgent.toLowerCase().indexOf("trident/7") > -1
        }

        function a() {
            var e = ["iPhone", "iPad", "iPod", "Android"],
                t = new RegExp(e.join("|"), "i");
            return t.test(navigator.userAgent)
        }

        function o() {
            var o = $("html");
            e() ? o.addClass("is-wiiu-Browser") : a() ? (o.addClass("is-sp"), n() ? o.addClass("is-android") : o.addClass("is-ios")) : s() ? o.addClass("is-ie") : t() && i() || o.addClass("is-pc");
            var r = $("html").attr("lang");
            href = "", "ja" == r || "zh-tw" == r ? href = "https://www.nintendo.co.jp/index.html" : "de" == r || "es" == r || "fr" == r || "it" == r || "nl" == r || "ru" == r ? href = "https://www.nintendo-europe.com/" : "en" == r ? href = "https://www.nintendo.com/" : "es-mx" == r ? href = "https://www.nintendo.com/es_LA" : "fr-ca" == r ? href = "https://www.nintendo.com/fr_CA" : "pt-br" == r ? href = "http://www.nintendo.com/countryselector/regions/brazil" : href = "http://www.nintendo.com/countryselector", $("header h1 a").attr("href", href), $("#languageWrap a").on("click", function() {
                $.cookie("checkLang", $(this).parent().attr("class"), {
                    expires: 60,
                    path: "/"
                })
            })
        }
        o.attention = function() {
            "ok" == $.cookie("checkEUcookie") ? $("#attention").velocity({
                opacity: 0
            }, {
                display: "none"
            }) : $("#attention").velocity({
                opacity: 1
            }, {
                display: "block"
            }), $(".cookieOK").on("click", function() {
                $.cookie("checkEUcookie", "ok", {
                    expires: 60,
                    path: "/"
                }), $("#attention").velocity({
                    opacity: 0
                }, {
                    display: "none"
                })
            })
        }, MARIO.utils = MARIO.utils || {}, MARIO.utils.cmn = o
    }(),
    function() {
        function e() {
            e.BaseClass_constructor.call(this), this.$wrap = $("#languageWrap"), this.$trigger = $(".btn_lang"), this.$close = this.$wrap.find(".btn_close"), this.isOpen = !1, this._init()
        }
        AMP.inherits(e, AMP.BaseClass);
        var t = e.prototype;
        t._init = function() {
            var e = this;
            this.$wrap.find(".wrap").load("policy.html"), this.$close.on("click", function() {
                return e.hide(), !1
            }), this.$trigger.on("click", function() {
                return e.show(), !1
            }), MARIO.event.mediator.on("change", function(t) {
                t.next && e.triggerHide()
            }), MARIO.event.mediator.on("complete", function(t) {
                0 === t.next && e.triggerShow()
            })
        }, t.triggerHide = function() {
            return this.$trigger.velocity("stop").velocity({
                left: -40
            }, {
                easing: "easeOutQuint"
            })
        }, t.triggerShow = function() {
            return this.$trigger.velocity("stop").velocity({
                left: -4
            }, {
                easing: "easeOutQuint"
            })
        }, t.show = function() {
            this.triggerHide(), this.$wrap.velocity("stop").velocity({
                left: 0
            }, {
                duration: 500,
                easing: "easeInOutQuart"
            }), this.$close.velocity("stop").velocity({
                top: 25
            }, {
                delay: 500,
                duration: 400,
                easing: "easeOutBounce"
            })
        }, t.hide = function() {
            this.triggerShow(), this.$wrap.velocity("stop").velocity({
                left: "-100%"
            }, {
                duration: 500,
                easing: "easeInOutQuart"
            }), this.$close.velocity("stop").velocity({
                top: -50
            }, {
                duration: 400,
                easing: "easeOutQuart"
            })
        }, MARIO.view = MARIO.view || {}, MARIO.view.Language = e
    }(),
    function() {
        function e(t) {
            e.BaseClass_constructor.call(this), this.$trigger = t.find(".btn a"), this.$trigger2 = t.find("figure img"), this.$modal = $("#sec04_modal"), this.$sec = this.$modal.find(".modal_sec"), this.$close = this.$modal.find(".btn_close"), this.$prev = this.$modal.find(".btn_prev"), this.$next = this.$modal.find(".btn_next"), this.$btn = this.$modal.find(".btnBounce"), this.current = 0, this.max = 3, this.sliders = this._createSlider(), this._init()
        }
        AMP.inherits(e, AMP.BaseClass);
        var t = e.prototype;
        t._init = function() {
            var e = this;
            this.$sec.velocity({
                scale: 0
            }, 0), this.$btn.velocity({
                scale: 0
            }, 0), this.$trigger.on("click", function() {
                return e.open(e.$trigger.index(this)), !1
            }), this.$trigger2.on("click", function() {
                return e.open(e.$trigger2.index(this)), !1
            }), this.$close.on("click", function() {
                return e.close(), !1
            }), this.$prev.on("click", function() {
                return e.tweenView(-1), !1
            }), this.$next.on("click", function() {
                return e.tweenView(1), !1
            })
        }, t._createSlider = function() {
            var e = [];
            return this.$modal.find(".slider").each(function(t) {
                e[t] = new MARIO.ui.Slider($(this))
            }), e
        }, t.setNavi = function(e) {
            var t = e ? 700 : 250;
            this.current ? this.max - 1 == this.current ? (this.$next.velocity("stop").velocity({
                scale: 0
            }, {
                duration: 300,
                easing: "easeOutBack"
            }), this.$prev.velocity("stop").velocity({
                scale: 1
            }, {
                delay: t,
                duration: 300,
                easing: "easeOutBack"
            })) : (this.$next.velocity("stop").velocity({
                scale: 1
            }, {
                delay: t,
                duration: 300,
                easing: "easeOutBack"
            }), this.$prev.velocity("stop").velocity({
                scale: 1
            }, {
                delay: t,
                duration: 300,
                easing: "easeOutBack"
            })) : (this.$prev.velocity("stop").velocity({
                scale: 0
            }, {
                duration: 300,
                easing: "easeOutBack"
            }), this.$next.velocity("stop").velocity({
                scale: 1
            }, {
                delay: t,
                duration: 300,
                easing: "easeOutBack"
            })), e && this.$close.velocity("stop").velocity({
                scale: 1
            }, {
                delay: t,
                duration: 300,
                easing: "easeOutBack"
            })
        }, t.tweenView = function(e) {
            var t = this.current,
                i = this.current + e;
            i < 0 ? i = this.max - 1 : i === this.max && (i = 0), this.current = i, this.sliders[t].stop(), this.$sec.eq(t).css({
                zIndex: 1
            }).velocity("stop").velocity({
                scale: 0
            }, {
                duration: 600,
                easing: "easeOutQuint"
            }), this.sliders[this.current].start(), this.$sec.eq(this.current).css({
                zIndex: this.max + 1
            }).velocity("stop").velocity({
                scale: 1
            }, {
                duration: 600,
                easing: "easeOutQuint"
            }), this._charaTween(), this.setNavi()
        }, t.open = function(e) {
            return !(e > this.max - 1) && (this.current = e, this.$modal.velocity("stop").velocity({
                left: 0
            }, {
                display: "block",
                duration: 500,
                easing: "easeInOutQuart"
            }), this.sliders[this.current].start(), this.$sec.eq(this.current).velocity("stop").velocity({
                scale: 1,
                zIndex: this.max + 1
            }, {
                delay: 400,
                duration: 500,
                easing: "easeOutQuint"
            }), this._charaTween(300), void this.setNavi(!0))
        }, t._charaTween = function(e) {
            e = e || 0, this.$sec.eq(this.current).find(".txt_box").velocity({
                scale: 0
            }, 0).velocity({
                scale: 1
            }, {
                delay: 100 + e,
                duration: 800,
                easing: "easeOutBack"
            });
            var t = this.current % 2 ? 250 : -250;
            this.$sec.eq(this.current).find(".chara").velocity({
                translateX: t,
                scale: 0
            }, 0).velocity({
                translateX: 0,
                scale: 1
            }, {
                delay: 100 + e,
                duration: 800,
                easing: "easeOutBack"
            })
        }, t.close = function() {
            var e = this;
            this.sliders[this.current].stop(), this.$sec.eq(this.current).css({
                zIndex: 1
            }).velocity("stop").velocity({
                scale: 0
            }, {
                duration: 500,
                easing: "easeInBack"
            }), this.$btn.velocity("stop").velocity({
                scale: 0
            }, {
                duration: 300,
                easing: "easeOutBack"
            }), this.$modal.velocity("stop").velocity({
                left: "-100%"
            }, {
                display: "none",
                delay: 400,
                duration: 500,
                easing: "easeInOutQuart",
                complete: function() {
                    e.$sec.eq(e.current).velocity({
                        zIndex: 1,
                        scale: 0
                    }, 0), e.$btn.velocity({
                        scale: 0
                    }, 0)
                }
            })
        }, MARIO.view = MARIO.view || {}, MARIO.view.Modal = e
    }(),
    function() {
        function e() {
            e.BaseClass_constructor.call(this), this.$wrap = $("#ppWrap"), this.$trigger = $(".btn_poricy"), this.$close = this.$wrap.find(".btn_close"), this.isOpen = !1, this._init()
        }
        AMP.inherits(e, AMP.BaseClass);
        var t = e.prototype;
        t._init = function() {
            var e = this;
            this.$wrap.find(".wrap").load("policy.html"), this.$close.on("click", function() {
                return e.hide(), !1
            }), window.ppWin = e.show.bind(e), this.$trigger.on("click", function() {
                if ("#" === $(this).attr("href")) return e.show(), !1
            })
        }, t.show = function() {
            this.$wrap.velocity("stop").velocity({
                left: 0
            }, {
                duration: 500,
                easing: "easeInOutQuart"
            }), this.$close.velocity("stop").velocity({
                top: 25
            }, {
                delay: 500,
                duration: 400,
                easing: "easeOutBounce"
            })
        }, t.hide = function() {
            this.$wrap.velocity("stop").velocity({
                left: "-100%"
            }, {
                duration: 500,
                easing: "easeInOutQuart"
            }), this.$close.velocity("stop").velocity({
                top: -50
            }, {
                duration: 400,
                easing: "easeOutQuart"
            })
        }, MARIO.view = MARIO.view || {}, MARIO.view.Poricy = e
    }(),
    function() {
        function e() {
            e.BaseClass_constructor.call(this), this.$wrap = $("#price_modal"), this.$trigger = $("#sec06").find(".price a"), this.$close = this.$wrap.find(".btn_close"), this.$close02 = this.$wrap.find("._btn02"), this.isOpen = !1, this._init()
        }
        AMP.inherits(e, AMP.BaseClass);
        var t = e.prototype;
        t._init = function() {
            var e = this;
            this.$wrap.find("tbody").load("../price.html"), this.$close.on("click", function() {
                return e.hide(), !1
            }), this.$trigger.on("click", function() {
                return e.show(), !1
            })
        }, t.show = function() {
            this.$wrap.velocity("stop").velocity({
                left: 0
            }, {
                duration: 500,
                easing: "easeInOutQuart"
            }), this.$close02.velocity("stop").velocity({
                top: 25
            }, {
                delay: 500,
                duration: 400,
                easing: "easeOutBounce"
            })
        }, t.hide = function() {
            this.$wrap.velocity("stop").velocity({
                left: "-100%"
            }, {
                duration: 500,
                easing: "easeInOutQuart"
            }), this.$close02.velocity("stop").velocity({
                top: -50
            }, {
                duration: 400,
                easing: "easeOutQuart"
            })
        }, MARIO.view = MARIO.view || {}, MARIO.view.Price = e
    }(),
    function() {
        function e(t) {
            e.SceneInterface_constructor.call(this, t)
        }
        AMP.inherits(e, MARIO.scene.SceneInterface);
        e.prototype;
        MARIO.scene = MARIO.scene || {}, MARIO.scene.Scene01 = e
    }(),
    function() {
        function e(t) {
            e.SceneInterface_constructor.call(this, t), this.$el = t.find(".cmn_ttl01, li, .view"), this.$txt = t.find(".cmn_ttl01, li"), this.$view = t.find(".view"), this.yotubes = [], this._init()
        }
        AMP.inherits(e, MARIO.scene.SceneInterface);
        var t = e.prototype;
        t._init = function() {
            var e = this;
            AMP.youtube.on("ready", function() {
                e.createYotube()
            }), this.$el.velocity({
                scale: 0
            }, 0)
        }, t.createYotube = function() {
            var e = this,
                t = this.$scene.find(".view"),
                i = $("<ul>"),
                n = "";
            AMP.each(YTtag, function(e, t) {
                n += "<li><div></div></li>"
            }), t.append(i.html(n));
            var s = t.find("div");
            s.each(function(t) {
                e.yotubes[t] = AMP.Youtube.createPlayer(this, YTtag[t], {
                    width: 216,
                    height: 386,
                    playerVars: {
                        modestbranding: 0
                    }
                })
            });
            var a = this.$scene.find(".list a"),
                o = t.find("li"),
                r = 0;
            a.on("click", function() {
                var t = a.index(this);
                return r === t ? e.yotubes[t].playVideo() : (e.yotubes[r].pauseVideo(), o.eq(r).css({
                    zIndex: 1
                }), TweenMax.to(o.eq(t).css({
                    zIndex: 10,
                    left: 236
                }), .5, {
                    left: 0,
                    ease: AMP.Ease.easeOutBounce,
                    onCompleate: function() {
                        setTimeout(function() {
                            e.yotubes[t].playVideo()
                        }, 500)
                    }
                })), r = t, !1
            })
        }, t.show = function() {
            this.$view.velocity({
                scale: 1
            }, {
                duration: 500,
                easing: "easeOutBack"
            }), this.$txt.each(function(e) {
                $(this).velocity({
                    scale: 1
                }, {
                    delay: 100 + 25 * e,
                    duration: 600,
                    easing: "easeOutBack"
                })
            })
        }, t.hide = function() {
            AMP.each(this.yotubes, function(e) {
                1 === e.getPlayerState() && e.pauseVideo()
            }), this.$el.velocity("stop").velocity({
                scale: 0
            }, {
                delay: 400,
                duration: 0,
                easing: "easeOutQuart"
            })
        }, MARIO.scene = MARIO.scene || {}, MARIO.scene.Scene02 = e
    }(),
    function() {
        function e(t) {
            e.SceneInterface_constructor.call(this, t), this.youtube = null, this.$el = t.find(".txt_wrap, .view"), this.$txt = t.find(".txt_wrap"), this.$view = t.find(".view"), this._init()
        }
        AMP.inherits(e, MARIO.scene.SceneInterface);
        var t = e.prototype;
        t._init = function() {
            var e = this;
            AMP.youtube.on("ready", function() {
                e.youtube = AMP.Youtube.createPlayer(e.$scene.find(".youtube")[0], YT_INTRODUCTION, {
                    width: 305,
                    height: 540,
                    playerVars: {
                        autoplay: 1,
                        loop: 1,
                        controls: 0,
                        mute: 1,
                        playlist: [YT_INTRODUCTION],
                        modestbranding: 0
                    },
                    events: {
                        onReady: function() {
                            e.youtube.mute()
                        }
                    }
                })
            }), this.$el.velocity({
                scale: 0
            }, 0)
        }, t.show = function() {
            this.$view.velocity({
                scale: 1
            }, {
                duration: 500,
                easing: "easeOutBack"
            }), this.$txt.velocity({
                scale: 1
            }, {
                delay: 100,
                duration: 500,
                easing: "easeOutBack"
            })
        }, t.hide = function() {
            this.$el.velocity("stop").velocity({
                scale: 0
            }, {
                delay: 400,
                duration: 0,
                easing: "easeOutQuart"
            })
        }, MARIO.scene = MARIO.scene || {}, MARIO.scene.Scene03 = e
    }(),
    function() {
        function e(t) {
            e.SceneInterface_constructor.call(this, t), this.modal = new MARIO.view.Modal(t), this.$el = t.find("h2, li"), this.$ttl = t.find("h2"), this.$li = t.find("li"), this._init()
        }
        AMP.inherits(e, MARIO.scene.SceneInterface);
        var t = e.prototype;
        t._init = function() {
            this.$ttl.velocity({
                scale: 0
            }, 0), this.$li.velocity({
                scale: 0,
                translateY: 150
            }, 0)
        }, t.show = function() {
            this.$ttl.velocity({
                scale: 1
            }, {
                duration: 500,
                easing: "easeOutBack"
            });
            var e = 200,
                t = {
                    scale: 1,
                    translateY: 0
                };
            this.$li.velocity({
                scale: 0,
                translateY: 150
            }, 0), this.$li.each(function(i) {
                $(this).velocity(t, {
                    delay: e + 100 * i,
                    duration: 500,
                    easing: "easeOutBack"
                })
            })
        }, t.hide = function() {
            this.$el.velocity("stop").velocity({
                scale: 0
            }, {
                delay: 400,
                duration: 0,
                easing: "easeOutQuart"
            })
        }, MARIO.scene = MARIO.scene || {}, MARIO.scene.Scene04 = e
    }(),
    function() {
        function e(t) {
            e.SceneInterface_constructor.call(this, t), this._init()
        }
        AMP.inherits(e, MARIO.scene.SceneInterface);
        e.prototype;
        MARIO.scene = MARIO.scene || {}, MARIO.scene.Scene05 = e
    }(),
    function() {
        function e(t) {
            e.SceneInterface_constructor.call(this, t), this.$el = t.find(".sec_inner > *"), this._init()
        }
        AMP.inherits(e, MARIO.scene.SceneInterface);
        var t = e.prototype;
        t._init = function() {
            this.$el.velocity({
                scale: 0
            }, 0)
        }, t.show = function() {
            this.$el.each(function(e) {
                $(this).velocity({
                    scale: 1
                }, {
                    delay: 100 + 25 * e,
                    duration: 600,
                    easing: "easeOutBack"
                })
            })
        }, t.hide = function() {
            this.$el.velocity("stop").velocity({
                scale: 0
            }, {
                delay: 400,
                duration: 0,
                easing: "easeOutQuart"
            })
        }, MARIO.scene = MARIO.scene || {}, MARIO.scene.Scene06 = e
    }(),
    function() {
        function e() {
            PIXI.Container.call(this), this.current = -1, this.isMove = !1, this.moveX = 55
        }
        var t = AMP.isIE(11),
            i = e.prototype = Object.create(PIXI.Container.prototype);
        e.constructor = e, i.setup = function() {
            var e, i = this;
            if (t) e = PIXI.Texture.fromImage(MARIO.Main.assetManeger.getFile("bg01.jpg").url);
            else {
                var n = document.createElement("video");
                n.src = MARIO.Main.assetManeger.getFile("bg01.mp4").url, n.autplay = !0, n.loop = !0, n.muted = !0, e = PIXI.Texture.fromVideo(n)
            }
            this.createScene({
                index: 0,
                texture: e,
                size: {
                    width: 400,
                    height: 700
                },
                maskArea: .73
            }), this.createScene({
                index: 1,
                texture: PIXI.Texture.fromImage(MARIO.Main.assetManeger.getFile("bg02.jpg").url),
                maskArea: .48
            }), this.createScene({
                index: 2,
                texture: PIXI.Texture.fromImage(MARIO.Main.assetManeger.getFile("bg03.jpg").url),
                maskArea: .48
            }), this.createScene({
                index: 3,
                texture: PIXI.Texture.fromImage(MARIO.Main.assetManeger.getFile("bg04.jpg").url),
                maskArea: .48
            }), MARIO.event.mediator.on("change", function(e) {
                i.hide(e.prev)
            }), MARIO.event.mediator.on("complete", function(e) {
                i.show(e.next)
            }), MARIO.$body.on("mousemove", function(e) {
                !i.isTween && MARIO.Main.scene.current && i.children[MARIO.Main.scene.current] && i.move(e.clientX, e.clientY)
            })
        }, i.createScene = function(e) {
            var t, i, n;
            t = new PIXI.Container, t.index = e.index, t.maskArea = e.maskArea, t.count = 0, t.alpha = 0, i = new PIXI.Sprite(e.texture), i.size = e.size, i.size ? (i.isVideo = !0, i.width = e.size.width, i.height = e.size.height) : i.isVideo = !1, i.mask = new PIXI.Graphics, this.fitSprite(i, t.maskArea), n = new PIXI.Graphics, n.alpha = .4, this.fitShape(n, t.maskArea), t.addChild(i, n), this.addChild(t)
        }, i.resize = function() {
            var e = this;
            AMP.each(this.children, function(t) {
                e.fitSprite(t.children[0], t.maskArea), e.fitShape(t.children[1], t.maskArea)
            })
        }, i.fitShape = function(e, t) {
            e.clear().beginFill(0).moveTo(MARIO.width * t - 20, MARIO.height).lineTo(MARIO.width * t - 23, MARIO.height).lineTo(MARIO.width * t + 57, 0).lineTo(MARIO.width * t + 60, 0)
        }, i.fitSprite = function(e, t) {
            if (e.size) MARIO.width / MARIO.height > MARIO.BASE_RATIO ? (e.width = MARIO.width - (MARIO.width * t - 40), e.height = e.width / e.size.width * e.size.height) : (e.width = e.size.width * (MARIO.height / e.size.height), e.height = MARIO.height);
            else if (MARIO.width / MARIO.height > MARIO.BASE_RATIO) {
                var i = MARIO.width * MARIO.BASE_HEIGHT / MARIO.BASE_WIDTH;
                e.originScale = e.scale.x = e.scale.y = i / e.texture.height
            } else e.originScale = e.scale.x = e.scale.y = MARIO.height / e.texture.height;
            e.isVideo ? e.x = MARIO.width - e.width : e.x = e.originX = MARIO.width - e.width + 2 * this.moveX, e.mask.clear().beginFill(0).moveTo(MARIO.width, 0).lineTo(MARIO.width, MARIO.height).lineTo(MARIO.width * t - 20, MARIO.height).lineTo(MARIO.width * t + 60, 0).endFill()
        }, i.hide = function(e) {
            var t = this;
            return this.current = -1, !!this.children[e] && (this.isTween = !0, this.children[e].count = 1, TweenMax.killTweensOf(this.children[e]), void TweenMax.to(this.children[e], 1, {
                count: 0,
                ease: AMP.Ease.easeInOutExpo,
                onUpdate: function() {
                    t._maskTween(t.children[e])
                },
                onComplete: function() {
                    t.children[e].alpha = 0
                }
            }))
        }, i.show = function(e, t) {
            var i = this;
            return -1 < this.current && this.hide(this.current), this.current = e, !!this.children[e] && (this.isTween = !0, this.children[e].count = 0, TweenMax.killTweensOf(this.children[e]), void TweenMax.to(this.children[e], .8, {
                count: 1,
                delay: AMP.isNumber(t) ? t : .15,
                ease: AMP.Ease.easeInOutExpo,
                onUpdate: function() {
                    i._maskTween(i.children[e])
                },
                onComplete: function() {
                    i.isTween = !1
                }
            }))
        }, i._maskTween = function(e) {
            var t = (MARIO.width / 2 + 60) * (1 - e.count);
            e.alpha = 1, e.children[1].x = t + 3, e.children[0].mask.clear().beginFill(0).moveTo(MARIO.width + t, 0).lineTo(MARIO.width + t, MARIO.height).lineTo(MARIO.width * e.maskArea - 20 + t, MARIO.height).lineTo(MARIO.width * e.maskArea + 60 + t, 0).endFill()
        }, i.move = function(e, t) {
            var i = MARIO.width / 2,
                n = (MARIO.height / 2, (e - i) / i),
                s = this.children[MARIO.Main.scene.current].children[0];
            TweenMax.killTweensOf(s), TweenMax.to(s, 1.8, {
                x: s.originX - n * this.moveX,
                ease: AMP.Ease.easeOutQuad
            })
        }, MARIO.stage = MARIO.stage || {}, MARIO.stage.BackGround = e
    }(),
    function() {
        function e() {
            PIXI.Container.call(this), this.baseScale = .338, this.baseLeft = 40
        }
        var t = e.prototype = Object.create(PIXI.Container.prototype);
        e.constructor = e, t.setup = function() {
            var e = this;
            return MARIO.Main.assetManeger.createCourseSprites(function(t) {
                e.addChild(t)
            }), this.resize(), this
        }, t.resize = function() {
            this.scale.x = this.scale.y = MARIO.width / MARIO.BASE_WIDTH * this.baseScale, this.x = MARIO.DISTANCE * MARIO.Main.scene.current * this.scale.x + this.baseLeft * this.scale.x, this.y = MARIO.height - MARIO.BASE_HEIGHT * this.scale.y
        }, t.tween = function() {
            TweenMax.to(this, .8, {
                x: MARIO.DISTANCE * MARIO.Main.scene.current * this.scale.x,
                ease: AMP.Ease.easeInOutQuart
            })
        }, t.move = function(e) {
            this.x = (MARIO.DISTANCE * MARIO.Main.scene.current + (MARIO.BASE_WIDTH + MARIO.INTERVAL) / -MARIO.Main.scene.distance * e) * this.scale.x
        }, t.openingTween01 = function() {
            TweenMax.to(this, .6, {
                baseLeft: 0,
                x: 0,
                ease: AMP.Ease.easeOutCubic
            })
        }, t.openingTween02 = function() {
            TweenMax.to(this, 1, {
                baseScale: 1,
                ease: AMP.Ease.easeInOutQuart,
                onUpdate: this.resize.bind(this)
            })
        }, MARIO.stage = MARIO.stage || {}, MARIO.stage.Course = e
    }(),
    function() {
        function e() {
            PIXI.Container.call(this), this.widthScale = MARIO.width / MARIO.BASE_WIDTH, this.heightScale = MARIO.height / MARIO.BASE_HEIGHT, this.x = 0, this.count = 1, this.isLoop = !1, this._init()
        }
        var t = e.prototype = Object.create(PIXI.Container.prototype);
        e.constructor = e, t._init = function() {},
            t.setup = function() {
                var e = this;
                this.createMario(), this.resize(), MARIO.event.mediator.on("change", function() {
                    e.loopStop()
                }), MARIO.event.mediator.on("complete", function(t) {
                    e.show(t.next), e.hide(t.prev)
                })
            }, t.createMario = function() {
                var e, t, i, n, s = this;
                e = this._createSec(), e.alpha = 1, e.show = function() {
                    this.x = 0, s.showChara02(), s.chara01.alpha = 0, this.alpha = 1
                }, this.chara01 = this._createBaseContainer(MARIO.CX, MARIO.CY), this.chara01.alpha = 0, i = PIXI.Texture.fromImage(MARIO.Main.assetManeger.getFile("mario02.png").url), n = new PIXI.Sprite(i), n.origin = {}, n.origin.x = n.x = 200, n.origin.y = n.y = -20, this.chara01.addChild(n), e.addChild(this.chara01), this.chara02 = this._createBaseContainer(MARIO.CX, MARIO.CY), this.chara02.alpha = 0, i = PIXI.Texture.fromImage(MARIO.Main.assetManeger.getFile("kuribo01.png").url), n = new PIXI.Sprite(i), n.pivot.x = 60, n.pivot.y = 190, n.origin = {}, n.origin.x = n.x = 882 + n.pivot.x, n.origin.y = n.y = 20 + n.pivot.y, this.chara02.addChild(n), i = PIXI.Texture.fromImage(MARIO.Main.assetManeger.getFile("mario01.png").url), n = new PIXI.Sprite(i), n.pivot.x = 380, n.pivot.y = 780, n.origin = {}, n.origin.x = n.x = 290 + n.pivot.x, n.origin.y = n.y = -140 + n.pivot.y, this.chara02.addChild(n), e.addChild(this.chara02), this.addChild(e), e = this._createSec(), t = this._createBaseContainer(MARIO.CX - 170, MARIO.CY);
                var a = this._createSprite("mario03.png", -135, -15);
                e.show = function() {
                    this.alpha = 1, TweenMax.fromTo(a, .8, {
                        x: MARIO.width / -2
                    }, {
                        x: a.x,
                        ease: AMP.Ease.easeOutQuint
                    })
                }, t.addChild(a), e.addChild(t), this.addChild(e), e = this._createSec(), t = this._createBaseContainer(462, MARIO.CY);
                var o = this._createSprite("mario02.png", -255, -10);
                e.show = function() {
                    this.alpha = 1, TweenMax.fromTo(o, .8, {
                        x: MARIO.width / -2,
                        y: MARIO.height / 2
                    }, {
                        x: o.x,
                        y: o.y,
                        ease: AMP.Ease.easeOutQuint
                    })
                }, t.addChild(o), e.addChild(t), this.addChild(e)
            }, t._createSec = function(e, t) {
                var i = new PIXI.Container;
                return i.alpha = 0, i.show = e ? e.bind(i) : function() {
                    this.alpha = 1
                }, i.hide = t ? t.bind(i) : function() {
                    this.alpha = 0
                }, i
            }, t._createBaseContainer = function(e, t) {
                e = AMP.isNumber(e) ? e : MARIO.CX, t = AMP.isNumber(t) ? t : MARIO.CY;
                var i = this,
                    n = new PIXI.Container;
                return n.width = MARIO.BASE_WIDTH, n.height = MARIO.BASE_HEIGHT, n.pivot.x = e, n.pivot.y = t, n.resize = function(e) {
                    return this.scale.x = this.scale.y = i.heightScale, this.x = MARIO.width / 2 - (MARIO.CX - this.pivot.x), this.y = MARIO.height / 2 - (MARIO.CY - this.pivot.y), e && e(), this
                }, n
            }, t._createSprite = function(e, t, i) {
                var n = PIXI.Texture.fromImage(MARIO.Main.assetManeger.getFile(e).url),
                    s = new PIXI.Sprite(n);
                return s.origin = {}, s.origin.x = s.x = t, s.origin.y = s.y = i, s
            }, t.resize = function() {
                var e = this;
                this.widthScale = MARIO.width / MARIO.BASE_WIDTH, this.heightScale = MARIO.height / MARIO.BASE_HEIGHT, this.x = MARIO.DISTANCE * MARIO.Main.scene.current * this.widthScale, AMP.each(this.children, function(t, i) {
                    t.x = -MARIO.DISTANCE * i * e.widthScale, AMP.each(t.children, function(t) {
                        t.resize ? t.resize() : t.scale.x = t.scale.y = e.heightScale
                    })
                })
            }, t.show = function(e) {
                this.children[e] && this.children[e].show()
            }, t.hide = function(e) {
                this.children[e] && this.children[e].hide()
            }, t.move = function(e) {
                this.x = (MARIO.DISTANCE * MARIO.Main.scene.current + (MARIO.BASE_WIDTH + MARIO.INTERVAL) / -MARIO.Main.scene.distance * e) * this.widthScale
            }, t.tween = function() {
                TweenMax.to(this, .8, {
                    x: MARIO.DISTANCE * MARIO.Main.scene.current * this.widthScale,
                    ease: AMP.Ease.easeInOutQuart
                })
            }, t.showChara01 = function() {
                var e = this.chara01.children[0];
                TweenMax.killTweensOf(e), TweenMax.fromTo(e, 1.5, {
                    x: e.origin.x - 1.5 * this.chara01.width,
                    y: e.origin.y + MARIO.height
                }, {
                    delay: .35,
                    x: e.origin.x,
                    y: e.origin.y,
                    ease: AMP.Ease.easeOutExpo
                }), this.chara01.alpha = 1
            }, t.hideChara01 = function() {
                var e = this;
                TweenMax.killTweensOf(this.chara01.children[0]), TweenMax.to(this.chara01.children[0], 1.5, {
                    x: MARIO.width,
                    y: -MARIO.height,
                    ease: AMP.Ease.easeInOutCubic,
                    onComplete: function() {
                        e.chara01.alpha = 0
                    }
                })
            }, t.showChara02 = function() {
                var e = this.chara02.children[0],
                    t = this.chara02.children[1];
                TweenMax.killTweensOf(e), TweenMax.killTweensOf(t), TweenMax.fromTo(e, 1, {
                    x: -MARIO.width,
                    rotation: AMP.degToRad(-360)
                }, {
                    x: e.origin.x,
                    rotation: 0,
                    ease: AMP.Ease.easeOutCubic
                }), TweenMax.fromTo(t, 1, {
                    x: -MARIO.width,
                    rotation: AMP.degToRad(-60)
                }, {
                    x: t.origin.x,
                    rotation: 0,
                    ease: AMP.Ease.easeOutCubic
                }), this.chara02.alpha = 1
            }, t.hideChara02 = function() {
                var e = this,
                    t = this.chara02.children[0],
                    i = this.chara02.children[1];
                TweenMax.killTweensOf(t), TweenMax.killTweensOf(i), TweenMax.to(t, 1.5, {
                    x: t.origin.x + MARIO.width,
                    rotation: AMP.degToRad(360),
                    delay: .3,
                    ease: AMP.Ease.easeOutCubic
                }), TweenMax.to(i, 1.5, {
                    x: i.origin.x + MARIO.width,
                    rotation: AMP.degToRad(60),
                    delay: .3,
                    ease: AMP.Ease.easeOutCubic,
                    onComplete: function() {
                        e.chara02.alpha = 0
                    }
                })
            }, t.loopStart = function() {
                this.isLoop || (this.isLoop = !0, this.count = 1, this.loop())
            }, t.loop = function() {
                var e = this;
                $.sequence(function() {
                    return $.timer(7e3)
                }, function() {
                    e.isLoop && (e.count += 1, e.count % 2 ? (e.hideChara01(), e.showChara02()) : (e.showChara01(), e.hideChara02()), e.loop())
                })
            }, t.loopStop = function() {
                this.count = 1, this.isLoop = !1
            }, t.openingTween01 = function() {
                this.showChara01()
            }, t.openingTween02 = function() {
                var e = this;
                $.sequence(function() {
                    return e.hideChara01(), $.timer(300)
                }, function() {
                    e.showChara02()
                })
            }, MARIO.stage = MARIO.stage || {}, MARIO.stage.Mario = e
    }();