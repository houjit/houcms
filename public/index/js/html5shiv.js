; (function(f, g) {
    var h = '3.7.3';
    var j = f.html5 || {};
    var k = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i;
    var m = /^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i;
    var n;
    var o = '_html5shiv';
    var q = 0;
    var r = {};
    var s; (function() {
        try {
            var a = g.createElement('a');
            a.innerHTML = '<xyz></xyz>';
            n = ('hidden' in a);
            s = a.childNodes.length == 1 || (function() { (g.createElement)('a');
                var a = g.createDocumentFragment();
                return (typeof a.cloneNode == 'undefined' || typeof a.createDocumentFragment == 'undefined' || typeof a.createElement == 'undefined')
            } ())
        } catch(e) {
            n = true;
            s = true
        }
    } ());
    function addStyleSheet(a, b) {
        var p = a.createElement('p'),
        parent = a.getElementsByTagName('head')[0] || a.documentElement;
        p.innerHTML = 'x<style>' + b + '</style>';
        return parent.insertBefore(p.lastChild, parent.firstChild)
    }
    function getElements() {
        var a = x.elements;
        return typeof a == 'string' ? a.split(' ') : a
    }
    function addElements(a, b) {
        var c = x.elements;
        if (typeof c != 'string') {
            c = c.join(' ')
        }
        if (typeof a != 'string') {
            a = a.join(' ')
        }
        x.elements = c + ' ' + a;
        shivDocument(b)
    }
    function getExpandoData(a) {
        var b = r[a[o]];
        if (!b) {
            b = {};
            q++;
            a[o] = q;
            r[q] = b
        }
        return b
    }
    function createElement(a, b, c) {
        if (!b) {
            b = g
        }
        if (s) {
            return b.createElement(a)
        }
        if (!c) {
            c = getExpandoData(b)
        }
        var d;
        if (c.cache[a]) {
            d = c.cache[a].cloneNode()
        } else if (m.test(a)) {
            d = (c.cache[a] = c.createElem(a)).cloneNode()
        } else {
            d = c.createElem(a)
        }
        return d.canHaveChildren && !k.test(a) && !d.tagUrn ? c.frag.appendChild(d) : d
    }
    function createDocumentFragment(a, b) {
        if (!a) {
            a = g
        }
        if (s) {
            return a.createDocumentFragment()
        }
        b = b || getExpandoData(a);
        var c = b.frag.cloneNode(),
        i = 0,
        elems = getElements(),
        l = elems.length;
        for (; i < l; i++) {
            c.createElement(elems[i])
        }
        return c
    }
    function shivMethods(b, c) {
        if (!c.cache) {
            c.cache = {};
            c.createElem = b.createElement;
            c.createFrag = b.createDocumentFragment;
            c.frag = c.createFrag()
        }
        b.createElement = function(a) {
            if (!x.shivMethods) {
                return c.createElem(a)
            }
            return createElement(a, b, c)
        };
        b.createDocumentFragment = Function('h,f', 'return function(){' + 'var n=f.cloneNode(),c=n.createElement;' + 'h.shivMethods&&(' + getElements().join().replace(/[\w\-:]+/g,
        function(a) {
            c.createElem(a);
            c.frag.createElement(a);
            return 'c("' + a + '")'
        }) + ');return n}')(x, c.frag)
    }
    function shivDocument(a) {
        if (!a) {
            a = g
        }
        var b = getExpandoData(a);
        if (x.shivCSS && !n && !b.hasCSS) {
            b.hasCSS = !!addStyleSheet(a, 'article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}' + 'mark{background:#FF0;color:#000}' + 'template{display:none}')
        }
        if (!s) {
            shivMethods(a, b)
        }
        return a
    }
    var x = {
        'elements': j.elements || 'abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output picture progress section summary template time video',
        'version': h,
        'shivCSS': (j.shivCSS !== false),
        'supportsUnknownElements': s,
        'shivMethods': (j.shivMethods !== false),
        'type': 'default',
        'shivDocument': shivDocument,
        createElement: createElement,
        createDocumentFragment: createDocumentFragment,
        addElements: addElements
    };
    f.html5 = x;
    shivDocument(g);
    if (typeof module == 'object' && module.exports) {
        module.exports = x
    }
} (typeof window !== "undefined" ? window: this, document));