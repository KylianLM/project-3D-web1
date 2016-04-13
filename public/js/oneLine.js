OneLine = {
    Element: {
        // Opérationnel
        getElem: function (elem) {
            return document.querySelector(elem);
        },
        changeIdClass: function (elem, value, classOrId) {
            var heidi = OneLine.Element.getElem(elem);
            if (classOrId == 'id') {
                heidi.id = value;
            }
            else if (classOrId == 'class') {
                heidi.className = value;
            }
        },
        setDisplay: function (elem, methode) {
            var element = document.querySelector(elem);
            return element.style.display = methode;
        },
        setPosition: function (elem, methode) {
            var element = document.querySelector(elem);
            return element.style.position = methode;
        }
    },

    Color: {
        // Opérationnel
        setBackgroundColor: function (elem, couleur) {
            var element = OneLine.Element.getElem(elem);
            element.style.backgroundColor = couleur;
        }
    },

    Font: {
        // Opérationnel
        colorFont: function (elem, couleur) {
            var element = OneLine.Element.getElem(elem);
            element.style.color = couleur;
        },
        increaseFontSize: function(elem, taille, vitesse) {
            var stopInterval = taille;
            var element = OneLine.Element.getElem(elem);
            var interval;
            var compteur = 0;
            interval = setInterval(function () {
                compteur++;
                element.style.fontSize = compteur + 'px';
                if (compteur >= parseInt(stopInterval)) {
                    clearInterval(interval);
                }
            }, vitesse);
        },
        decreaseFontSize: function(elem, taille, vitesse) {
            var stopInterval = parseInt(taille);
            var element = OneLine.Element.getElem(elem);
            var interval;
            var compteur = parseInt(getComputedStyle(element, null).getPropertyValue('font-size'));
            interval = setInterval(function () {
                compteur = compteur-1;
                element.style.fontSize = compteur + 'px';
                if (compteur <= parseInt(stopInterval)) {
                    clearInterval(interval);
                }
            }, vitesse);
        }
    },

    OpacityElem: {
        // Opérationnel
        setOpacity: function (elem, opacity) {
            var element = OneLine.Element.getElem(elem);
            element.style.opacity = opacity;
        },
        disparitionFondu: function (elem, vitesseFondu, supprimerElement, enleverDuDom) {
            var element = OneLine.Element.getElem(elem);
            var compteur = 9;
            var interval;
            interval = setInterval(function () {
                compteur--;
                element.style.opacity = '0.' + compteur;
                if (compteur === 0) {
                    clearInterval(interval);
                    if (supprimerElement === true) {
                        element.remove();
                    }
                    if (enleverDuDom === true) {
                        element.style.display = 'none';
                    }
                }
            }, vitesseFondu)
        },
        apparitionFondu: function (elem, vitesseFondu) {
            var element = OneLine.Element.getElem(elem);
            var compteur = 0;
            var interval;

            OneLine.Element.setDisplay(elem, 'none');
            if (element.style.display == 'none') {
                interval = setInterval(function () {
                    compteur++;
                    element.style.opacity = '0.' + compteur;
                    element.style.display = 'block';
                    if (compteur == 9) {
                        compteur = 1;
                        element.style.opacity = compteur;
                        clearInterval(interval);
                    }
                }, vitesseFondu);
            }
        }
    },

    Move: {
        // Opérationnel
        elementMoveBottom: function (elem, methode, vitesseDeplacement, multiplicateurVitesse, timeClearInterval) {
            var element = OneLine.Element.getElem(elem);
            var compteur = 0;
            var interval;
            var valeur;
            var clear = timeClearInterval;
            if (multiplicateurVitesse == null) {
                interval = setInterval(function () {
                    compteur++;
                    element.style.position = methode;
                    element.style.top = compteur + 'px';
                    if (compteur >= clear) {
                        clearInterval(interval);
                    }
                }, vitesseDeplacement);
            }
            else {
                interval = setInterval(function () {
                    compteur++;
                    element.style.position = methode;
                    valeur = compteur * multiplicateurVitesse;
                    element.style.top = valeur + 'px';
                    if (valeur >= parseInt(clear)) {
                        clearInterval(interval);
                    }
                }, vitesseDeplacement);
            }
        },
        elementMoveTop: function (elem, methode, vitesseDeplacement, multiplicateurVitesse, timeClearInterval) {
            var element = OneLine.Element.getElem(elem);
            var compteur = 0;
            var interval;
            var valeur;
            var clear = timeClearInterval;
            if (multiplicateurVitesse == null) {
                interval = setInterval(function () {
                    compteur++;
                    element.style.position = methode;
                    element.style.bottom = compteur + 'px';
                    if (compteur >= clear) {
                        clearInterval(interval);
                    }
                }, vitesseDeplacement);
            }
            else {
                interval = setInterval(function () {
                    compteur++;
                    element.style.position = methode;
                    valeur = compteur * multiplicateurVitesse;
                    element.style.bottom = valeur + 'px';
                    if (valeur >= parseInt(clear)) {
                        clearInterval(interval);
                    }
                }, vitesseDeplacement);
            }
        },
        elementMoveLeft: function (elem, methode, vitesseDeplacement, multiplicateurVitesse, timeClearInterval) {
            var element = OneLine.Element.getElem(elem);
            var compteur = 0;
            var interval;
            var valeur;
            var clear = timeClearInterval;
            if (multiplicateurVitesse == null) {
                interval = setInterval(function () {
                    compteur++;
                    element.style.position = methode;
                    element.style.right = compteur + 'px';
                    if (compteur >= clear) {
                        clearInterval(interval);
                    }
                }, vitesseDeplacement);
            }
            else {
                interval = setInterval(function () {
                    compteur++;
                    element.style.position = methode;
                    valeur = compteur * multiplicateurVitesse;
                    element.style.right = valeur + 'px';
                    if (valeur >= parseInt(clear)) {
                        clearInterval(interval);
                    }
                }, vitesseDeplacement);
            }
        },
        elementMoveRight: function (elem, methode, vitesseDeplacement, multiplicateurVitesse, timeClearInterval) {
            var element = OneLine.Element.getElem(elem);
            var compteur = 0;
            var interval;
            var valeur;
            var clear = timeClearInterval;
            if (multiplicateurVitesse == null) {
                interval = setInterval(function () {
                    compteur++;
                    element.style.position = methode;
                    element.style.left = compteur + 'px';
                    if (compteur >= clear) {
                        clearInterval(interval);
                    }
                }, vitesseDeplacement);
            }
            else {
                interval = setInterval(function () {
                    compteur++;
                    element.style.position = methode;
                    valeur = compteur * multiplicateurVitesse;
                    element.style.left = valeur + 'px';
                    if (valeur >= parseInt(clear)) {
                        clearInterval(interval);
                    }
                }, vitesseDeplacement);
            }
        }
    },

    Size: {
        // Opérationnel
        increaseSizeWidth: function (elem, vitesse, multiplicateurVitesse, timeClearInterval) {
            var element = OneLine.Element.getElem(elem);
            var compteur = 0;
            var interval;
            var valeur;
            time = timeClearInterval;
            if (multiplicateurVitesse == null) {
                interval = setInterval(function () {
                    compteur++;
                    valeur = compteur;
                    element.style.width = valeur + 'px';
                    if (valeur >= parseInt(time)) {
                        clearInterval(interval);
                    }
                }, vitesse);
            } else {
                interval = setInterval(function () {
                    compteur++;
                    valeur = compteur * multiplicateurVitesse;
                    element.style.width = valeur + 'px';
                    if (valeur >= parseInt(time)) {
                        clearInterval(interval);
                    }
                }, vitesse);
            }
        },
        increaseSizeHeight: function (elem, vitesse, multiplicateurVitesse, timeClearInterval) {
            var element = OneLine.Element.getElem(elem);
            var compteur = 0;
            var interval;
            var valeur;
            time = timeClearInterval;
            if (multiplicateurVitesse == null) {
                interval = setInterval(function () {
                    compteur++;
                    valeur = compteur;
                    element.style.height = valeur + 'px';
                    if (valeur >= parseInt(time)) {
                        clearInterval(interval);
                    }
                }, vitesse);
            } else {
                interval = setInterval(function () {
                    compteur++;
                    valeur = compteur * multiplicateurVitesse;
                    element.style.height = valeur + 'px';
                    if (valeur >= parseInt(time)) {
                        clearInterval(interval);
                    }
                }, vitesse);
            }
        },
        increaseSizeWidthHeight: function (elem, vitesse, multiplicateurVitesse, timeClearInterval) {
            var element = OneLine.Element.getElem(elem);
            var compteur = 0;
            var interval;
            var valeur;
            time = timeClearInterval;
            if (multiplicateurVitesse == null) {
                interval = setInterval(function () {
                    compteur++;
                    valeur = compteur;
                    element.style.height = valeur + 'px';
                    element.style.width = valeur + 'px';
                    if (valeur >= parseInt(time)) {
                        clearInterval(interval);
                    }
                }, vitesse);
            } else {
                interval = setInterval(function () {
                    compteur++;
                    valeur = compteur * multiplicateurVitesse;
                    element.style.height = valeur + 'px';
                    element.style.width = valeur + 'px';
                    if (valeur >= parseInt(time)) {
                        clearInterval(interval);
                    }
                }, vitesse);
            }
        },
        descreaseSizeWidth: function(elem, vitesse, timeClearInterval){
            var element = OneLine.Element.getElem(elem).offsetWidth;
            var element_2 = OneLine.Element.getElem(elem);
            var interval;
            var valeur = timeClearInterval;
            interval = setInterval(function(){
                element = element-1;
                element_2.style.width = element + 'px';
                if(element === parseInt(valeur)){
                    clearInterval(interval);
                }
            }, vitesse);
        },
        descreaseSizeHeight: function(elem, vitesse, timeClearInterval){
            var element = OneLine.Element.getElem(elem).offsetWidth;
            var element_2 = OneLine.Element.getElem(elem);
            var interval;
            var valeur = timeClearInterval;
            interval = setInterval(function(){
                element = element-1;
                element_2.style.height = element + 'px';
                if(element === parseInt(valeur)){
                    clearInterval(interval);
                }
            }, vitesse);
        },
        descreaseSizeWidthHeight: function(elem, vitesse, timeClearInterval){
            var element = OneLine.Element.getElem(elem).offsetWidth;
            var element_2 = OneLine.Element.getElem(elem);
            var interval;
            var valeur = timeClearInterval;
            interval = setInterval(function(){
                element = element-1;
                element_2.style.width = element + 'px';
                element_2.style.height = element + 'px';
                if(element === parseInt(valeur)){
                    clearInterval(interval);
                }
            }, vitesse);
        }
    },

    MathCalcul: {
        // Opérationnel
        calcul: function (nombre1, nombre2, signe) {
            if (signe === '+') {
                return (parseInt(nombre1) + parseInt(nombre2))
            }
            if (signe === '*' || signe === 'x') {
                return (parseInt(nombre1) * parseInt(nombre2))
            }
            if (signe === '-') {
                return (parseInt(nombre1) - parseInt(nombre2))
            }
            if (signe === '/') {
                return (parseInt(nombre1) / parseInt(nombre2))
            }
            if (signe === '%') {
                return (parseInt(nombre1) % parseInt(nombre2))
            }
        }
    }
};