!function() {
    const e = ["keydown", "mousemove", "wheel", "touchmove", "touchstart", "touchend"];
    function t() {
        document.querySelectorAll("link[data-pmdelayedstyle]").forEach(function(e) {
            e.setAttribute("href", e.getAttribute("data-pmdelayedstyle"))
        }),
        e.forEach(function(e) {
            window.removeEventListener(e, t, {
                passive: !0
            })
        })
    }
    e.forEach(function(e) {
        window.addEventListener(e, t, {
            passive: !0
        })
    })
}();

const perfmattersUserInteractions = ["keydown", "mousemove", "wheel", "touchmove", "touchstart", "touchend"];
            perfmattersUserInteractions.forEach(function(event) {
                window.addEventListener(event, pmTriggerDelayedScripts, {
                    passive: !0
                })
            });
            function pmTriggerDelayedScripts() {
                pmLoadDelayedScripts();
                perfmattersUserInteractions.forEach(function(event) {
                    window.removeEventListener(event, pmTriggerDelayedScripts, {
                        passive: !0
                    });
                });
            }
            function pmLoadDelayedScripts() {
                document.querySelectorAll("script[data-pmdelayedscript]").forEach(function(elem) {
                    elem.setAttribute("src", elem.getAttribute("data-pmdelayedscript"));
                });
            }