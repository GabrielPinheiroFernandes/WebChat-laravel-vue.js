<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia="">Welcome - Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&amp;display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script type="text/javascript">
        const Ziggy = {
            "url": "http:\/\/127.0.0.1:8000",
            "port": 8000,
            "defaults": {},
            "routes": {
                "login": {
                    "uri": "login",
                    "methods": ["GET", "HEAD"]
                },
                "logout": {
                    "uri": "logout",
                    "methods": ["POST"]
                },
                "password.request": {
                    "uri": "forgot-password",
                    "methods": ["GET", "HEAD"]
                },
                "password.reset": {
                    "uri": "reset-password\/{token}",
                    "methods": ["GET", "HEAD"],
                    "parameters": ["token"]
                },
                "password.email": {
                    "uri": "forgot-password",
                    "methods": ["POST"]
                },
                "password.update": {
                    "uri": "reset-password",
                    "methods": ["POST"]
                },
                "register": {
                    "uri": "register",
                    "methods": ["GET", "HEAD"]
                },
                "user-profile-information.update": {
                    "uri": "user\/profile-information",
                    "methods": ["PUT"]
                },
                "user-password.update": {
                    "uri": "user\/password",
                    "methods": ["PUT"]
                },
                "password.confirmation": {
                    "uri": "user\/confirmed-password-status",
                    "methods": ["GET", "HEAD"]
                },
                "password.confirm": {
                    "uri": "user\/confirm-password",
                    "methods": ["POST"]
                },
                "two-factor.login": {
                    "uri": "two-factor-challenge",
                    "methods": ["GET", "HEAD"]
                },
                "two-factor.enable": {
                    "uri": "user\/two-factor-authentication",
                    "methods": ["POST"]
                },
                "two-factor.confirm": {
                    "uri": "user\/confirmed-two-factor-authentication",
                    "methods": ["POST"]
                },
                "two-factor.disable": {
                    "uri": "user\/two-factor-authentication",
                    "methods": ["DELETE"]
                },
                "two-factor.qr-code": {
                    "uri": "user\/two-factor-qr-code",
                    "methods": ["GET", "HEAD"]
                },
                "two-factor.secret-key": {
                    "uri": "user\/two-factor-secret-key",
                    "methods": ["GET", "HEAD"]
                },
                "two-factor.recovery-codes": {
                    "uri": "user\/two-factor-recovery-codes",
                    "methods": ["GET", "HEAD"]
                },
                "profile.show": {
                    "uri": "user\/profile",
                    "methods": ["GET", "HEAD"]
                },
                "other-browser-sessions.destroy": {
                    "uri": "user\/other-browser-sessions",
                    "methods": ["DELETE"]
                },
                "current-user-photo.destroy": {
                    "uri": "user\/profile-photo",
                    "methods": ["DELETE"]
                },
                "current-user.destroy": {
                    "uri": "user",
                    "methods": ["DELETE"]
                },
                "sanctum.csrf-cookie": {
                    "uri": "sanctum\/csrf-cookie",
                    "methods": ["GET", "HEAD"]
                },
                "ignition.healthCheck": {
                    "uri": "_ignition\/health-check",
                    "methods": ["GET", "HEAD"]
                },
                "ignition.executeSolution": {
                    "uri": "_ignition\/execute-solution",
                    "methods": ["POST"]
                },
                "ignition.updateConfig": {
                    "uri": "_ignition\/update-config",
                    "methods": ["POST"]
                },
                "dashboard": {
                    "uri": "dashboard",
                    "methods": ["GET", "HEAD"]
                }
            }
        };
        ! function(t, r) {
            "object" == typeof exports && "undefined" != typeof module ? module.exports = r() : "function" ==
                typeof define && define.amd ? define(r) : (t || self).route = r()
        }(this, function() {
            function t() {
                try {
                    var r = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function() {}))
                } catch (r) {}
                return (t = function() {
                    return !!r
                })()
            }

            function r(t) {
                var r = function(t, r) {
                    if ("object" != typeof t || !t) return t;
                    var e = t[Symbol.toPrimitive];
                    if (void 0 !== e) {
                        var n = e.call(t, "string");
                        if ("object" != typeof n) return n;
                        throw new TypeError("@@toPrimitive must return a primitive value.")
                    }
                    return String(t)
                }(t);
                return "symbol" == typeof r ? r : String(r)
            }

            function e(t, e) {
                for (var n = 0; n < e.length; n++) {
                    var o = e[n];
                    o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object
                        .defineProperty(t, r(o.key), o)
                }
            }

            function n(t, r, n) {
                return r && e(t.prototype, r), n && e(t, n), Object.defineProperty(t, "prototype", {
                    writable: !1
                }), t
            }

            function o() {
                return o = Object.assign ? Object.assign.bind() : function(t) {
                    for (var r = 1; r < arguments.length; r++) {
                        var e = arguments[r];
                        for (var n in e) Object.prototype.hasOwnProperty.call(e, n) && (t[n] = e[n])
                    }
                    return t
                }, o.apply(this, arguments)
            }

            function i(t) {
                return i = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function(t) {
                    return t.__proto__ || Object.getPrototypeOf(t)
                }, i(t)
            }

            function u(t, r) {
                return u = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function(t, r) {
                    return t.__proto__ = r, t
                }, u(t, r)
            }

            function f(r) {
                var e = "function" == typeof Map ? new Map : void 0;
                return f = function(r) {
                    if (null === r || ! function(t) {
                            try {
                                return -1 !== Function.toString.call(t).indexOf("[native code]")
                            } catch (r) {
                                return "function" == typeof t
                            }
                        }(r)) return r;
                    if ("function" != typeof r) throw new TypeError(
                        "Super expression must either be null or a function");
                    if (void 0 !== e) {
                        if (e.has(r)) return e.get(r);
                        e.set(r, n)
                    }

                    function n() {
                        return function(r, e, n) {
                            if (t()) return Reflect.construct.apply(null, arguments);
                            var o = [null];
                            o.push.apply(o, e);
                            var i = new(r.bind.apply(r, o));
                            return n && u(i, n.prototype), i
                        }(r, arguments, i(this).constructor)
                    }
                    return n.prototype = Object.create(r.prototype, {
                        constructor: {
                            value: n,
                            enumerable: !1,
                            writable: !0,
                            configurable: !0
                        }
                    }), u(n, r)
                }, f(r)
            }
            var a = String.prototype.replace,
                c = /%20/g,
                l = "RFC3986",
                s = {
                    default: l,
                    formatters: {
                        RFC1738: function(t) {
                            return a.call(t, c, "+")
                        },
                        RFC3986: function(t) {
                            return String(t)
                        }
                    },
                    RFC1738: "RFC1738",
                    RFC3986: l
                },
                v = Object.prototype.hasOwnProperty,
                p = Array.isArray,
                y = function() {
                    for (var t = [], r = 0; r < 256; ++r) t.push("%" + ((r < 16 ? "0" : "") + r.toString(16))
                        .toUpperCase());
                    return t
                }(),
                d = function(t, r) {
                    for (var e = r && r.plainObjects ? Object.create(null) : {}, n = 0; n < t.length; ++n) void 0 !== t[
                        n] && (e[n] = t[n]);
                    return e
                },
                b = {
                    arrayToObject: d,
                    assign: function(t, r) {
                        return Object.keys(r).reduce(function(t, e) {
                            return t[e] = r[e], t
                        }, t)
                    },
                    combine: function(t, r) {
                        return [].concat(t, r)
                    },
                    compact: function(t) {
                        for (var r = [{
                                obj: {
                                    o: t
                                },
                                prop: "o"
                            }], e = [], n = 0; n < r.length; ++n)
                            for (var o = r[n], i = o.obj[o.prop], u = Object.keys(i), f = 0; f < u.length; ++f) {
                                var a = u[f],
                                    c = i[a];
                                "object" == typeof c && null !== c && -1 === e.indexOf(c) && (r.push({
                                    obj: i,
                                    prop: a
                                }), e.push(c))
                            }
                        return function(t) {
                            for (; t.length > 1;) {
                                var r = t.pop(),
                                    e = r.obj[r.prop];
                                if (p(e)) {
                                    for (var n = [], o = 0; o < e.length; ++o) void 0 !== e[o] && n.push(e[o]);
                                    r.obj[r.prop] = n
                                }
                            }
                        }(r), t
                    },
                    decode: function(t, r, e) {
                        var n = t.replace(/\+/g, " ");
                        if ("iso-8859-1" === e) return n.replace(/%[0-9a-f]{2}/gi, unescape);
                        try {
                            return decodeURIComponent(n)
                        } catch (t) {
                            return n
                        }
                    },
                    encode: function(t, r, e, n, o) {
                        if (0 === t.length) return t;
                        var i = t;
                        if ("symbol" == typeof t ? i = Symbol.prototype.toString.call(t) : "string" != typeof t && (
                                i = String(t)), "iso-8859-1" === e) return escape(i).replace(/%u[0-9a-f]{4}/gi,
                            function(t) {
                                return "%26%23" + parseInt(t.slice(2), 16) + "%3B"
                            });
                        for (var u = "", f = 0; f < i.length; ++f) {
                            var a = i.charCodeAt(f);
                            45 === a || 46 === a || 95 === a || 126 === a || a >= 48 && a <= 57 || a >= 65 && a <=
                                90 || a >= 97 && a <= 122 || o === s.RFC1738 && (40 === a || 41 === a) ? u += i
                                .charAt(f) : a < 128 ? u += y[a] : a < 2048 ? u += y[192 | a >> 6] + y[128 | 63 &
                                a] : a < 55296 || a >= 57344 ? u += y[224 | a >> 12] + y[128 | a >> 6 & 63] + y[
                                    128 | 63 & a] : (a = 65536 + ((1023 & a) << 10 | 1023 & i.charCodeAt(f += 1)),
                                    u += y[240 | a >> 18] + y[128 | a >> 12 & 63] + y[128 | a >> 6 & 63] + y[128 |
                                        63 & a])
                        }
                        return u
                    },
                    isBuffer: function(t) {
                        return !(!t || "object" != typeof t || !(t.constructor && t.constructor.isBuffer && t
                            .constructor.isBuffer(t)))
                    },
                    isRegExp: function(t) {
                        return "[object RegExp]" === Object.prototype.toString.call(t)
                    },
                    maybeMap: function(t, r) {
                        if (p(t)) {
                            for (var e = [], n = 0; n < t.length; n += 1) e.push(r(t[n]));
                            return e
                        }
                        return r(t)
                    },
                    merge: function t(r, e, n) {
                        if (!e) return r;
                        if ("object" != typeof e) {
                            if (p(r)) r.push(e);
                            else {
                                if (!r || "object" != typeof r) return [r, e];
                                (n && (n.plainObjects || n.allowPrototypes) || !v.call(Object.prototype, e)) && (r[
                                    e] = !0)
                            }
                            return r
                        }
                        if (!r || "object" != typeof r) return [r].concat(e);
                        var o = r;
                        return p(r) && !p(e) && (o = d(r, n)), p(r) && p(e) ? (e.forEach(function(e, o) {
                            if (v.call(r, o)) {
                                var i = r[o];
                                i && "object" == typeof i && e && "object" == typeof e ? r[o] = t(i, e,
                                    n) : r.push(e)
                            } else r[o] = e
                        }), r) : Object.keys(e).reduce(function(r, o) {
                            var i = e[o];
                            return r[o] = v.call(r, o) ? t(r[o], i, n) : i, r
                        }, o)
                    }
                },
                h = Object.prototype.hasOwnProperty,
                g = {
                    brackets: function(t) {
                        return t + "[]"
                    },
                    comma: "comma",
                    indices: function(t, r) {
                        return t + "[" + r + "]"
                    },
                    repeat: function(t) {
                        return t
                    }
                },
                m = Array.isArray,
                j = String.prototype.split,
                w = Array.prototype.push,
                O = function(t, r) {
                    w.apply(t, m(r) ? r : [r])
                },
                E = Date.prototype.toISOString,
                S = s.default,
                R = {
                    addQueryPrefix: !1,
                    allowDots: !1,
                    charset: "utf-8",
                    charsetSentinel: !1,
                    delimiter: "&",
                    encode: !0,
                    encoder: b.encode,
                    encodeValuesOnly: !1,
                    format: S,
                    formatter: s.formatters[S],
                    indices: !1,
                    serializeDate: function(t) {
                        return E.call(t)
                    },
                    skipNulls: !1,
                    strictNullHandling: !1
                },
                k = function t(r, e, n, o, i, u, f, a, c, l, s, v, p, y) {
                    var d, h = r;
                    if ("function" == typeof f ? h = f(e, h) : h instanceof Date ? h = l(h) : "comma" === n && m(h) && (
                            h = b.maybeMap(h, function(t) {
                                return t instanceof Date ? l(t) : t
                            })), null === h) {
                        if (o) return u && !p ? u(e, R.encoder, y, "key", s) : e;
                        h = ""
                    }
                    if ("string" == typeof(d = h) || "number" == typeof d || "boolean" == typeof d || "symbol" ==
                        typeof d || "bigint" == typeof d || b.isBuffer(h)) {
                        if (u) {
                            var g = p ? e : u(e, R.encoder, y, "key", s);
                            if ("comma" === n && p) {
                                for (var w = j.call(String(h), ","), E = "", S = 0; S < w.length; ++S) E += (0 === S ?
                                    "" : ",") + v(u(w[S], R.encoder, y, "value", s));
                                return [v(g) + "=" + E]
                            }
                            return [v(g) + "=" + v(u(h, R.encoder, y, "value", s))]
                        }
                        return [v(e) + "=" + v(String(h))]
                    }
                    var k, T = [];
                    if (void 0 === h) return T;
                    if ("comma" === n && m(h)) k = [{
                        value: h.length > 0 ? h.join(",") || null : void 0
                    }];
                    else if (m(f)) k = f;
                    else {
                        var x = Object.keys(h);
                        k = a ? x.sort(a) : x
                    }
                    for (var N = 0; N < k.length; ++N) {
                        var C = k[N],
                            $ = "object" == typeof C && void 0 !== C.value ? C.value : h[C];
                        if (!i || null !== $) {
                            var A = m(h) ? "function" == typeof n ? n(e, C) : e : e + (c ? "." + C : "[" + C + "]");
                            O(T, t($, A, n, o, i, u, f, a, c, l, s, v, p, y))
                        }
                    }
                    return T
                },
                T = Object.prototype.hasOwnProperty,
                x = Array.isArray,
                N = {
                    allowDots: !1,
                    allowPrototypes: !1,
                    arrayLimit: 20,
                    charset: "utf-8",
                    charsetSentinel: !1,
                    comma: !1,
                    decoder: b.decode,
                    delimiter: "&",
                    depth: 5,
                    ignoreQueryPrefix: !1,
                    interpretNumericEntities: !1,
                    parameterLimit: 1e3,
                    parseArrays: !0,
                    plainObjects: !1,
                    strictNullHandling: !1
                },
                C = function(t) {
                    return t.replace(/&#(\d+);/g, function(t, r) {
                        return String.fromCharCode(parseInt(r, 10))
                    })
                },
                $ = function(t, r) {
                    return t && "string" == typeof t && r.comma && t.indexOf(",") > -1 ? t.split(",") : t
                },
                A = function(t, r, e, n) {
                    if (t) {
                        var o = e.allowDots ? t.replace(/\.([^.[]+)/g, "[$1]") : t,
                            i = /(\[[^[\]]*])/g,
                            u = e.depth > 0 && /(\[[^[\]]*])/.exec(o),
                            f = u ? o.slice(0, u.index) : o,
                            a = [];
                        if (f) {
                            if (!e.plainObjects && T.call(Object.prototype, f) && !e.allowPrototypes) return;
                            a.push(f)
                        }
                        for (var c = 0; e.depth > 0 && null !== (u = i.exec(o)) && c < e.depth;) {
                            if (c += 1, !e.plainObjects && T.call(Object.prototype, u[1].slice(1, -1)) && !e
                                .allowPrototypes) return;
                            a.push(u[1])
                        }
                        return u && a.push("[" + o.slice(u.index) + "]"),
                            function(t, r, e, n) {
                                for (var o = n ? r : $(r, e), i = t.length - 1; i >= 0; --i) {
                                    var u, f = t[i];
                                    if ("[]" === f && e.parseArrays) u = [].concat(o);
                                    else {
                                        u = e.plainObjects ? Object.create(null) : {};
                                        var a = "[" === f.charAt(0) && "]" === f.charAt(f.length - 1) ? f.slice(1, -1) :
                                            f,
                                            c = parseInt(a, 10);
                                        e.parseArrays || "" !== a ? !isNaN(c) && f !== a && String(c) === a && c >= 0 &&
                                            e.parseArrays && c <= e.arrayLimit ? (u = [])[c] = o : "__proto__" !== a &&
                                            (u[a] = o) : u = {
                                                0: o
                                            }
                                    }
                                    o = u
                                }
                                return o
                            }(a, r, e, n)
                    }
                },
                D = function(t, r) {
                    var e = function(t) {
                        if (!t) return N;
                        if (null != t.decoder && "function" != typeof t.decoder) throw new TypeError(
                            "Decoder has to be a function.");
                        if (void 0 !== t.charset && "utf-8" !== t.charset && "iso-8859-1" !== t.charset)
                        throw new TypeError("The charset option must be either utf-8, iso-8859-1, or undefined");
                        return {
                            allowDots: void 0 === t.allowDots ? N.allowDots : !!t.allowDots,
                            allowPrototypes: "boolean" == typeof t.allowPrototypes ? t.allowPrototypes : N
                                .allowPrototypes,
                            arrayLimit: "number" == typeof t.arrayLimit ? t.arrayLimit : N.arrayLimit,
                            charset: void 0 === t.charset ? N.charset : t.charset,
                            charsetSentinel: "boolean" == typeof t.charsetSentinel ? t.charsetSentinel : N
                                .charsetSentinel,
                            comma: "boolean" == typeof t.comma ? t.comma : N.comma,
                            decoder: "function" == typeof t.decoder ? t.decoder : N.decoder,
                            delimiter: "string" == typeof t.delimiter || b.isRegExp(t.delimiter) ? t.delimiter : N
                                .delimiter,
                            depth: "number" == typeof t.depth || !1 === t.depth ? +t.depth : N.depth,
                            ignoreQueryPrefix: !0 === t.ignoreQueryPrefix,
                            interpretNumericEntities: "boolean" == typeof t.interpretNumericEntities ? t
                                .interpretNumericEntities : N.interpretNumericEntities,
                            parameterLimit: "number" == typeof t.parameterLimit ? t.parameterLimit : N
                                .parameterLimit,
                            parseArrays: !1 !== t.parseArrays,
                            plainObjects: "boolean" == typeof t.plainObjects ? t.plainObjects : N.plainObjects,
                            strictNullHandling: "boolean" == typeof t.strictNullHandling ? t.strictNullHandling : N
                                .strictNullHandling
                        }
                    }(r);
                    if ("" === t || null == t) return e.plainObjects ? Object.create(null) : {};
                    for (var n = "string" == typeof t ? function(t, r) {
                            var e, n = {},
                                o = (r.ignoreQueryPrefix ? t.replace(/^\?/, "") : t).split(r.delimiter, Infinity ===
                                    r.parameterLimit ? void 0 : r.parameterLimit),
                                i = -1,
                                u = r.charset;
                            if (r.charsetSentinel)
                                for (e = 0; e < o.length; ++e) 0 === o[e].indexOf("utf8=") && ("utf8=%E2%9C%93" ===
                                    o[e] ? u = "utf-8" : "utf8=%26%2310003%3B" === o[e] && (u = "iso-8859-1"),
                                    i = e, e = o.length);
                            for (e = 0; e < o.length; ++e)
                                if (e !== i) {
                                    var f, a, c = o[e],
                                        l = c.indexOf("]="),
                                        s = -1 === l ? c.indexOf("=") : l + 1; - 1 === s ? (f = r.decoder(c, N
                                            .decoder, u, "key"), a = r.strictNullHandling ? null : "") : (f = r
                                            .decoder(c.slice(0, s), N.decoder, u, "key"), a = b.maybeMap($(c.slice(
                                                s + 1), r), function(t) {
                                                return r.decoder(t, N.decoder, u, "value")
                                            })), a && r.interpretNumericEntities && "iso-8859-1" === u && (a = C(
                                        a)), c.indexOf("[]=") > -1 && (a = x(a) ? [a] : a), n[f] = T.call(n, f) ? b
                                        .combine(n[f], a) : a
                                } return n
                        }(t, e) : t, o = e.plainObjects ? Object.create(null) : {}, i = Object.keys(n), u = 0; u < i
                        .length; ++u) {
                        var f = i[u],
                            a = A(f, n[f], e, "string" == typeof t);
                        o = b.merge(o, a, e)
                    }
                    return b.compact(o)
                },
                P = /*#__PURE__*/ function() {
                    function t(t, r, e) {
                        var n, o;
                        this.name = t, this.definition = r, this.bindings = null != (n = r.bindings) ? n : {}, this
                            .wheres = null != (o = r.wheres) ? o : {}, this.config = e
                    }
                    var r = t.prototype;
                    return r.matchesUrl = function(t) {
                        var r = this;
                        if (!this.definition.methods.includes("GET")) return !1;
                        var e = this.template.replace(/(\/?){([^}?]*)(\??)}/g, function(t, e, n, o) {
                                var i, u = "(?<" + n + ">" + ((null == (i = r.wheres[n]) ? void 0 : i.replace(
                                    /(^\^)|(\$$)/g, "")) || "[^/?]+") + ")";
                                return o ? "(" + e + u + ")?" : "" + e + u
                            }).replace(/^\w+:\/\//, ""),
                            n = t.replace(/^\w+:\/\//, "").split("?"),
                            o = n[0],
                            i = n[1],
                            u = new RegExp("^" + e + "/?$").exec(decodeURI(o));
                        if (u) {
                            for (var f in u.groups) u.groups[f] = "string" == typeof u.groups[f] ?
                                decodeURIComponent(u.groups[f]) : u.groups[f];
                            return {
                                params: u.groups,
                                query: D(i)
                            }
                        }
                        return !1
                    }, r.compile = function(t) {
                        var r = this;
                        return this.parameterSegments.length ? this.template.replace(/{([^}?]+)(\??)}/g, function(e,
                            n, o) {
                            var i, u;
                            if (!o && [null, void 0].includes(t[n])) throw new Error("Ziggy error: '" + n +
                                "' parameter is required for route '" + r.name + "'.");
                            if (r.wheres[n] && !new RegExp("^" + (o ? "(" + r.wheres[n] + ")?" : r.wheres[
                                    n]) + "$").test(null != (u = t[n]) ? u : "")) throw new Error(
                                "Ziggy error: '" + n + "' parameter '" + t[n] +
                                "' does not match required format '" + r.wheres[n] +
                                "' for route '" + r.name + "'.");
                            return encodeURI(null != (i = t[n]) ? i : "").replace(/%7C/g, "|").replace(
                                /%25/g, "%").replace(/\$/g, "%24")
                        }).replace(this.config.absolute ? /(\.[^/]+?)(\/\/)/ : /(^)(\/\/)/, "$1/").replace(
                            /\/+$/, "") : this.template
                    }, n(t, [{
                        key: "template",
                        get: function() {
                            var t = (this.origin + "/" + this.definition.uri).replace(/\/+$/, "");
                            return "" === t ? "/" : t
                        }
                    }, {
                        key: "origin",
                        get: function() {
                            return this.config.absolute ? this.definition.domain ? "" + this.config.url
                                .match(/^\w+:\/\//)[0] + this.definition.domain + (this.config.port ?
                                    ":" + this.config.port : "") : this.config.url : ""
                        }
                    }, {
                        key: "parameterSegments",
                        get: function() {
                            var t, r;
                            return null != (t = null == (r = this.template.match(/{[^}?]+\??}/g)) ?
                                void 0 : r.map(function(t) {
                                    return {
                                        name: t.replace(/{|\??}/g, ""),
                                        required: !/\?}$/.test(t)
                                    }
                                })) ? t : []
                        }
                    }]), t
                }(),
                F = /*#__PURE__*/ function(t) {
                    var r, e;

                    function i(r, e, n, i) {
                        var u;
                        if (void 0 === n && (n = !0), (u = t.call(this) || this).t = null != i ? i : "undefined" !=
                            typeof Ziggy ? Ziggy : null == globalThis ? void 0 : globalThis.Ziggy, u.t = o({}, u.t, {
                                absolute: n
                            }), r) {
                            if (!u.t.routes[r]) throw new Error("Ziggy error: route '" + r +
                                "' is not in the route list.");
                            u.i = new P(r, u.t.routes[r], u.t), u.u = u.l(e)
                        }
                        return u
                    }
                    e = t, (r = i).prototype = Object.create(e.prototype), r.prototype.constructor = r, u(r, e);
                    var f = i.prototype;
                    return f.toString = function() {
                        var t = this,
                            r = Object.keys(this.u).filter(function(r) {
                                return !t.i.parameterSegments.some(function(t) {
                                    return t.name === r
                                })
                            }).filter(function(t) {
                                return "_query" !== t
                            }).reduce(function(r, e) {
                                var n;
                                return o({}, r, ((n = {})[e] = t.u[e], n))
                            }, {});
                        return this.i.compile(this.u) + function(t, r) {
                            var e, n = t,
                                o = function(t) {
                                    if (!t) return R;
                                    if (null != t.encoder && "function" != typeof t.encoder)
                                    throw new TypeError("Encoder has to be a function.");
                                    var r = t.charset || R.charset;
                                    if (void 0 !== t.charset && "utf-8" !== t.charset && "iso-8859-1" !== t
                                        .charset) throw new TypeError(
                                        "The charset option must be either utf-8, iso-8859-1, or undefined"
                                        );
                                    var e = s.default;
                                    if (void 0 !== t.format) {
                                        if (!h.call(s.formatters, t.format)) throw new TypeError(
                                            "Unknown format option provided.");
                                        e = t.format
                                    }
                                    var n = s.formatters[e],
                                        o = R.filter;
                                    return ("function" == typeof t.filter || m(t.filter)) && (o = t.filter), {
                                        addQueryPrefix: "boolean" == typeof t.addQueryPrefix ? t
                                            .addQueryPrefix : R.addQueryPrefix,
                                        allowDots: void 0 === t.allowDots ? R.allowDots : !!t.allowDots,
                                        charset: r,
                                        charsetSentinel: "boolean" == typeof t.charsetSentinel ? t
                                            .charsetSentinel : R.charsetSentinel,
                                        delimiter: void 0 === t.delimiter ? R.delimiter : t.delimiter,
                                        encode: "boolean" == typeof t.encode ? t.encode : R.encode,
                                        encoder: "function" == typeof t.encoder ? t.encoder : R.encoder,
                                        encodeValuesOnly: "boolean" == typeof t.encodeValuesOnly ? t
                                            .encodeValuesOnly : R.encodeValuesOnly,
                                        filter: o,
                                        format: e,
                                        formatter: n,
                                        serializeDate: "function" == typeof t.serializeDate ? t
                                            .serializeDate : R.serializeDate,
                                        skipNulls: "boolean" == typeof t.skipNulls ? t.skipNulls : R
                                            .skipNulls,
                                        sort: "function" == typeof t.sort ? t.sort : null,
                                        strictNullHandling: "boolean" == typeof t.strictNullHandling ? t
                                            .strictNullHandling : R.strictNullHandling
                                    }
                                }(r);
                            "function" == typeof o.filter ? n = (0, o.filter)("", n) : m(o.filter) && (e = o
                                .filter);
                            var i = [];
                            if ("object" != typeof n || null === n) return "";
                            var u = g[r && r.arrayFormat in g ? r.arrayFormat : r && "indices" in r ? r
                                .indices ? "indices" : "repeat" : "indices"];
                            e || (e = Object.keys(n)), o.sort && e.sort(o.sort);
                            for (var f = 0; f < e.length; ++f) {
                                var a = e[f];
                                o.skipNulls && null === n[a] || O(i, k(n[a], a, u, o.strictNullHandling, o
                                    .skipNulls, o.encode ? o.encoder : null, o.filter, o.sort, o
                                    .allowDots, o.serializeDate, o.format, o.formatter, o
                                    .encodeValuesOnly, o.charset))
                            }
                            var c = i.join(o.delimiter),
                                l = !0 === o.addQueryPrefix ? "?" : "";
                            return o.charsetSentinel && (l += "iso-8859-1" === o.charset ?
                                "utf8=%26%2310003%3B&" : "utf8=%E2%9C%93&"), c.length > 0 ? l + c : ""
                        }(o({}, r, this.u._query), {
                            addQueryPrefix: !0,
                            arrayFormat: "indices",
                            encodeValuesOnly: !0,
                            skipNulls: !0,
                            encoder: function(t, r) {
                                return "boolean" == typeof t ? Number(t) : r(t)
                            }
                        })
                    }, f.v = function(t) {
                        var r = this;
                        t ? this.t.absolute && t.startsWith("/") && (t = this.p().host + t) : t = this.h();
                        var e = {},
                            n = Object.entries(this.t.routes).find(function(n) {
                                return e = new P(n[0], n[1], r.t).matchesUrl(t)
                            }) || [void 0, void 0];
                        return o({
                            name: n[0]
                        }, e, {
                            route: n[1]
                        })
                    }, f.h = function() {
                        var t = this.p(),
                            r = t.pathname,
                            e = t.search;
                        return (this.t.absolute ? t.host + r : r.replace(this.t.url.replace(/^\w*:\/\/[^/]+/, ""),
                            "").replace(/^\/+/, "/")) + e
                    }, f.current = function(t, r) {
                        var e = this.v(),
                            n = e.name,
                            i = e.params,
                            u = e.query,
                            f = e.route;
                        if (!t) return n;
                        var a = new RegExp("^" + t.replace(/\./g, "\\.").replace(/\*/g, ".*") + "$").test(n);
                        if ([null, void 0].includes(r) || !a) return a;
                        var c = new P(n, f, this.t);
                        r = this.l(r, c);
                        var l = o({}, i, u);
                        return !(!Object.values(r).every(function(t) {
                            return !t
                        }) || Object.values(l).some(function(t) {
                            return void 0 !== t
                        })) || function t(r, e) {
                            return Object.entries(r).every(function(r) {
                                var n = r[0],
                                    o = r[1];
                                return Array.isArray(o) && Array.isArray(e[n]) ? o.every(function(t) {
                                        return e[n].includes(t)
                                    }) : "object" == typeof o && "object" == typeof e[n] && null !==
                                    o && null !== e[n] ? t(o, e[n]) : e[n] == o
                            })
                        }(r, l)
                    }, f.p = function() {
                        var t, r, e, n, o, i, u = "undefined" != typeof window ? window.location : {},
                            f = u.host,
                            a = u.pathname,
                            c = u.search;
                        return {
                            host: null != (t = null == (r = this.t.location) ? void 0 : r.host) ? t : void 0 === f ?
                                "" : f,
                            pathname: null != (e = null == (n = this.t.location) ? void 0 : n.pathname) ? e :
                                void 0 === a ? "" : a,
                            search: null != (o = null == (i = this.t.location) ? void 0 : i.search) ? o : void 0 ===
                                c ? "" : c
                        }
                    }, f.has = function(t) {
                        return Object.keys(this.t.routes).includes(t)
                    }, f.l = function(t, r) {
                        var e = this;
                        void 0 === t && (t = {}), void 0 === r && (r = this.i), null != t || (t = {}), t = [
                            "string", "number"
                        ].includes(typeof t) ? [t] : t;
                        var n = r.parameterSegments.filter(function(t) {
                            return !e.t.defaults[t.name]
                        });
                        if (Array.isArray(t)) t = t.reduce(function(t, r, e) {
                            var i, u;
                            return o({}, t, n[e] ? ((i = {})[n[e].name] = r, i) : "object" == typeof r ? r :
                                ((u = {})[r] = "", u))
                        }, {});
                        else if (1 === n.length && !t[n[0].name] && (t.hasOwnProperty(Object.values(r.bindings)[
                                0]) || t.hasOwnProperty("id"))) {
                            var i;
                            (i = {})[n[0].name] = t, t = i
                        }
                        return o({}, this.m(r), this.j(t, r))
                    }, f.m = function(t) {
                        var r = this;
                        return t.parameterSegments.filter(function(t) {
                            return r.t.defaults[t.name]
                        }).reduce(function(t, e, n) {
                            var i, u = e.name;
                            return o({}, t, ((i = {})[u] = r.t.defaults[u], i))
                        }, {})
                    }, f.j = function(t, r) {
                        var e = r.bindings,
                            n = r.parameterSegments;
                        return Object.entries(t).reduce(function(t, r) {
                            var i, u, f = r[0],
                                a = r[1];
                            if (!a || "object" != typeof a || Array.isArray(a) || !n.some(function(t) {
                                    return t.name === f
                                })) return o({}, t, ((u = {})[f] = a, u));
                            if (!a.hasOwnProperty(e[f])) {
                                if (!a.hasOwnProperty("id")) throw new Error(
                                    "Ziggy error: object passed as '" + f +
                                    "' parameter is missing route model binding key '" + e[f] + "'."
                                    );
                                e[f] = "id"
                            }
                            return o({}, t, ((i = {})[f] = a[e[f]], i))
                        }, {})
                    }, f.valueOf = function() {
                        return this.toString()
                    }, n(i, [{
                        key: "params",
                        get: function() {
                            var t = this.v();
                            return o({}, t.params, t.query)
                        }
                    }, {
                        key: "routeParams",
                        get: function() {
                            return this.v().params
                        }
                    }, {
                        key: "queryParams",
                        get: function() {
                            return this.v().query
                        }
                    }]), i
                }( /*#__PURE__*/ f(String));
            return function(t, r, e, n) {
                var o = new F(t, r, e, n);
                return t ? o.toString() : o
            }
        });
    </script>
    <link rel="preload" as="style" href="http://127.0.0.1:8000/build/assets/app-DKPpg875.css">
    <link rel="preload" as="style" href="http://127.0.0.1:8000/build/assets/Welcome-CSsUW0tK.css">
    <link rel="modulepreload" href="http://127.0.0.1:8000/build/assets/app-CO-aBtEA.js">
    <link rel="modulepreload" href="http://127.0.0.1:8000/build/assets/Welcome-DklcZ6Av.js">
    <link rel="stylesheet" href="http://127.0.0.1:8000/build/assets/app-DKPpg875.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/build/assets/Welcome-CSsUW0tK.css">
    <script type="module" src="http://127.0.0.1:8000/build/assets/app-CO-aBtEA.js"></script>
    <script type="module" src="http://127.0.0.1:8000/build/assets/Welcome-DklcZ6Av.js"></script>
    <style type="text/css" id="operaUserStyle"></style>
    <link rel="modulepreload" as="script" crossorigin="" href="/build/assets/Welcome-DklcZ6Av.js">
    <link rel="stylesheet" crossorigin="" href="/build/assets/Welcome-CSsUW0tK.css">
    <style type="text/css">
        #nprogress {
            pointer-events: none;
        }

        #nprogress .bar {
            background: #4B5563;

            position: fixed;
            z-index: 1031;
            top: 0;
            left: 0;

            width: 100%;
            height: 2px;
        }

        #nprogress .peg {
            display: block;
            position: absolute;
            right: 0px;
            width: 100px;
            height: 100%;
            box-shadow: 0 0 10px #4B5563, 0 0 5px #4B5563;
            opacity: 1.0;

            -webkit-transform: rotate(3deg) translate(0px, -4px);
            -ms-transform: rotate(3deg) translate(0px, -4px);
            transform: rotate(3deg) translate(0px, -4px);
        }

        #nprogress .spinner {
            display: block;
            position: fixed;
            z-index: 1031;
            top: 15px;
            right: 15px;
        }

        #nprogress .spinner-icon {
            width: 18px;
            height: 18px;
            box-sizing: border-box;

            border: solid 2px transparent;
            border-top-color: #4B5563;
            border-left-color: #4B5563;
            border-radius: 50%;

            -webkit-animation: nprogress-spinner 400ms linear infinite;
            animation: nprogress-spinner 400ms linear infinite;
        }

        .nprogress-custom-parent {
            overflow: hidden;
            position: relative;
        }

        .nprogress-custom-parent #nprogress .spinner,
        .nprogress-custom-parent #nprogress .bar {
            position: absolute;
        }

        @-webkit-keyframes nprogress-spinner {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes nprogress-spinner {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div id="app"
        data-page="{&quot;component&quot;:&quot;Welcome&quot;,&quot;props&quot;:{&quot;jetstream&quot;:{&quot;canCreateTeams&quot;:false,&quot;canManageTwoFactorAuthentication&quot;:true,&quot;canUpdatePassword&quot;:true,&quot;canUpdateProfileInformation&quot;:true,&quot;hasEmailVerification&quot;:false,&quot;flash&quot;:[],&quot;hasAccountDeletionFeatures&quot;:true,&quot;hasApiFeatures&quot;:false,&quot;hasTeamFeatures&quot;:false,&quot;hasTermsAndPrivacyPolicyFeature&quot;:false,&quot;managesProfilePhotos&quot;:false},&quot;auth&quot;:{&quot;user&quot;:{&quot;id&quot;:1,&quot;name&quot;:&quot;Gabriel&quot;,&quot;email&quot;:&quot;sefodeu10@hotmail.com&quot;,&quot;email_verified_at&quot;:null,&quot;two_factor_confirmed_at&quot;:null,&quot;current_team_id&quot;:null,&quot;profile_photo_path&quot;:null,&quot;created_at&quot;:&quot;2024-10-06T22:02:18.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-10-06T22:02:18.000000Z&quot;,&quot;profile_photo_url&quot;:&quot;https:\/\/ui-avatars.com\/api\/?name=G&amp;color=7F9CF5&amp;background=EBF4FF&quot;,&quot;two_factor_enabled&quot;:false}},&quot;errorBags&quot;:[],&quot;errors&quot;:{},&quot;canLogin&quot;:true,&quot;canRegister&quot;:true,&quot;laravelVersion&quot;:&quot;10.48.22&quot;,&quot;phpVersion&quot;:&quot;8.1.10&quot;},&quot;url&quot;:&quot;\/&quot;,&quot;version&quot;:&quot;34cbfdab95c5c90cef4e633b468941f3&quot;}"
        data-v-app=""><!---->
        <div
            class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="sm:fixed sm:top-0 sm:end-0 p-6 text-end z-10"><a
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    href="http://127.0.0.1:8000/dashboard">Dashboard</a></div>
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center"><svg viewBox="0 0 62 65" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path
                            d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z"
                            fill="#FF2D20"></path>
                    </svg></div>
                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8"><a href="https://laravel.com/docs"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div
                                    class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25">
                                        </path>
                                    </svg></div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>
                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed"> Laravel has
                                    wonderful documentation covering every aspect of the framework. Whether you are a
                                    newcomer or have prior experience with Laravel, we recommend reading our
                                    documentation from beginning to end. </p>
                            </div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                            </svg>
                        </a><a href="https://laracasts.com"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div
                                    class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round"
                                            d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z">
                                        </path>
                                    </svg></div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>
                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed"> Laracasts
                                    offers thousands of video tutorials on Laravel, PHP, and JavaScript development.
                                    Check them out, see for yourself, and massively level up your development skills in
                                    the process. </p>
                            </div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                            </svg>
                        </a><a href="https://laravel-news.com"
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div
                                    class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z">
                                        </path>
                                    </svg></div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>
                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed"> Laravel News
                                    is a community driven portal and newsletter aggregating all of the latest and most
                                    important news in the Laravel ecosystem, including new package releases and
                                    tutorials. </p>
                            </div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                            </svg>
                        </a>
                        <div
                            class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div
                                    class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64">
                                        </path>
                                    </svg></div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem
                                </h2>
                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed"> Laravel's
                                    robust library of first-party tools and libraries, such as <a
                                        href="https://forge.laravel.com"
                                        class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>,
                                    <a href="https://vapor.laravel.com"
                                        class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>,
                                    <a href="https://nova.laravel.com"
                                        class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>,
                                    and <a href="https://envoyer.io"
                                        class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a>
                                    help you take your projects to the next level. Pair them with powerful open source
                                    libraries like <a href="https://laravel.com/docs/billing"
                                        class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>,
                                    <a href="https://laravel.com/docs/dusk"
                                        class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>,
                                    <a href="https://laravel.com/docs/broadcasting"
                                        class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>,
                                    <a href="https://laravel.com/docs/horizon"
                                        class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>,
                                    <a href="https://laravel.com/docs/sanctum"
                                        class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>,
                                    <a href="https://laravel.com/docs/telescope"
                                        class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>,
                                    and more. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mt-16 px-6 sm:items-center sm:justify-between">
                    <div class="text-center text-sm sm:text-start"> &nbsp; </div>
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-end sm:ms-0"> Laravel
                        v10.48.22 (PHP v8.1.10) </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
