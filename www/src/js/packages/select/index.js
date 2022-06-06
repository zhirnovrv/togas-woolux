// utility functions


class NiceSelect {


    constructor(element, options) {
        if (!element) return;

        let defaultOptions = {
            data: null,
            searchable: false,
            hideDisabled: true
        };

        this.el = element;
        this.config = Object.assign({}, defaultOptions, options || {});

        this.data = this.config.data;
        this.selectedOptions = [];

        this.placeholder =
            this.attr(this.el, "placeholder") ||
            this.config.placeholder ||
            "Select an option";

        this.dropdown = null;
        this.multiple = this.attr(this.el, "multiple");
        this.disabled = this.attr(this.el, "disabled");

        this._onItemSelected = this._onItemSelected.bind(this);

        this.create();
    }

    triggerEvent(el, event) {
        if (!event) {
            event = document.createEvent("MouseEvents");
            event.initEvent("click", true, false);
        }
        el.dispatchEvent(event);
    }

    triggerChange(el) {
        let event = document.createEvent("HTMLEvents");
        event.initEvent("change", true, false);
        el.dispatchEvent(event);
    }

    attr(el, key) {
        if (el === null) return;
        return el.getAttribute(key);
    }

    hasClass(el, className) {
        if (el) return el.classList.contains(className);
        else return false;
    }

    addClass(el, className) {
        if (el) return el.classList.add(className);
    }

    removeClass(el, className) {
        if (el) return el.classList.remove(className);
    }

    isScrolledIntoView(ele, container) {
        const {bottom, height, top} = ele.getBoundingClientRect();
        const containerRect = container.getBoundingClientRect();

        return top >= containerRect.top && bottom <= containerRect.bottom;
    }

    create() {
        this.el.style.display = "none";

        if (this.data) {
            this.processData(this.data);
        } else {
            this.extractData();
        }

        this.renderDropdown();
        this.bindEvent();
    };

    processData(data) {
        let options = [];
        data.forEach(function (item) {
            options.push({
                data: item,
                attributes: {
                    selected: false,
                    disabled: false,
                    display: true,
                },
            });
        });
        this.options = options;
    };

    extractData() {
        let options = this.el.querySelectorAll("option");
        let data = [];
        let allOptions = [];
        let selectedOptions = [];

        options.forEach((item) => {
            let itemData = {
                text: item.innerText,
                value: item.value,
            };

            let attributes = {
                selected:
                    item.getAttribute("selected") != null || item.value == this.el.value,
                disabled: item.getAttribute("disabled") != null,
                display: true,
            };

            data.push(itemData);
            allOptions.push({data: itemData, attributes: attributes});
        });

        this.data = data;
        this.options = allOptions;
        this.options.forEach(function (item) {
            if (item.attributes.selected) selectedOptions.push(item);
        });

        this.selectedOptions = selectedOptions;
    };

    renderDropdown() {
        let classes = [
            "nice-select",
            this.attr(this.el, "class") || "",
            this.disabled ? "disabled" : "",
            this.multiple ? "has-multiple" : "",
        ];

        if(this.el.parentNode.querySelectorAll('.nice-select').length === 0){
            let searchHtml = `<div class="nice-select-search-box">
                            <input type="text" class="nice-select-search" placeholder="Search..."/>
                          </div>`;

            let html =
                `<div class="${classes.join(" ")}" tabindex="${this.disabled ? null : 0}">
                <span class="${this.multiple ? "" : "current-label"}"></span>
                <span class="${this.multiple ? "multiple-options" : "current"}"></span>
                <div class="nice-select-dropdown">
                ${this.config.searchable ? searchHtml : ""}
                <ul class="list"></ul>
                </div>
            </div>`;

            this.el.insertAdjacentHTML("afterend", html);
        }

        this.dropdown = this.el.nextElementSibling;
        this._renderSelectedItems();
        this._renderItems();
    };

    _renderSelectedItems() {



        if (this.multiple) {
            let selectedHtml = "";

            this.selectedOptions.forEach(function (item) {
                selectedHtml += `<span class="current">${item.data.text}</span>`;
            });
            selectedHtml = selectedHtml == "" ? this.placeholder : selectedHtml;

            this.dropdown.querySelector(".multiple-options").innerHTML = selectedHtml;
        } else {
            let html =
                this.selectedOptions.length > 0
                    ? this.selectedOptions[0].data.text
                    : this.placeholder;

            this.dropdown.querySelector(".current").innerHTML = html;

            if (this.selectedOptions[0].data.text !== this.placeholder) {
                this.dropdown.querySelector(".current").classList.add('selected');
            } else {
                this.dropdown.querySelector(".current").classList.remove('selected');
            }

            this.dropdown.querySelector(".current-label").innerHTML = this.placeholder;

            if (this.selectedOptions[0].data.text !== this.placeholder) {
                this.dropdown.querySelector(".current-label").classList.add('show');
            } else {
                this.dropdown.querySelector(".current-label").classList.remove('show');
            }
        }
    };


    _renderItems() {
        let ul = this.dropdown.querySelector("ul");
        ul.scrollTop = 0;
        ul.innerHTML = "";
        this.options.forEach((item) => {
            if (item.display) {
                let el = this._renderItem(item);
                if(el !== false){
                    ul.appendChild(el);
                }
            }
        });
    };

    _renderItem(opt) {
        let option = opt;
        let el = document.createElement("li");
        el.setAttribute("data-value", option.data.value);

        //console.log('this.config.hideDisabled', option, this.config.hideDisabled)
        if(option.attributes.disabled && this.config.hideDisabled === true) return false;

        let classList = [
            "option",
            option.attributes.selected ? "selected" : null,
            option.attributes.disabled ? "disabled" : null,
        ];

        el.classList.add(...classList);
        el.innerHTML = option.data.text;
        el.addEventListener("click", (e) => this._onItemSelected(option, e));
        el.addEventListener("select", (e) => this._onItemSelected(option, e));
        option.element = el;
        return el;
    };

    update() {
        this.extractData();
        if (this.dropdown) {
            let open = this.hasClass(this.dropdown, "open");
            this.dropdown.parentNode.removeChild(this.dropdown);
            this.create();

            document.querySelectorAll('.nice-select').forEach(item => {
                item.classList.remove('form-select');
                item.classList.remove('wide');
            });

            if (open) {
                this.triggerEvent(this.dropdown);
            }
        }
    };

    focus() {
        this.dropdown.classList.toggle("open");
        this.dropdown.querySelector("ul").scrollTop = 0;

        if (this.dropdown.classList.contains("open")) {
            let search = this.dropdown.querySelector(".nice-select-search");
            if (search) {
                search.value = "";
                search.focus();
            }

            let t = this.dropdown.querySelector(".focus");
            this.removeClass(t, "focus");
            t = this.dropdown.querySelector(".selected");
            this.addClass(t, "focus");
            for (let i = 0; i < this.options.length; i++) {
                this.options[i].display = true;
            }
            this._renderItems();
        } else {
            this.dropdown.focus();
        }
    };

    disable() {
        if (!this.disabled) {
            this.disabled = true;
            this.addClass(this.dropdown, "disabled");
        }
    };

    enable() {
        if (this.disabled) {
            this.disabled = false;
            this.removeClass(this.dropdown, "disabled");
        }
    };

    clear() {
        this.selectedOptions = [];
        this._renderSelectedItems();
        this.updateSelectValue();
        this.triggerChange(this.el);
    };

    destroy() {
        if (this.dropdown) {
            this.dropdown.parentNode.removeChild(this.dropdown);
            this.el.style.display = "";
        }
    };

    bindEvent() {
        let $this = this;
        this.dropdown.addEventListener("click", this._onClicked.bind(this));
        this.dropdown.addEventListener("keydown", this._onKeyPressed.bind(this));
        window.addEventListener("click", this._onClickedOutside.bind(this));

        if (this.config.searchable) {
            this._bindSearchEvent();
        }
    };

    _bindSearchEvent() {
        let searchBox = this.dropdown.querySelector(".nice-select-search");
        if (searchBox)
            searchBox.addEventListener("click", function (e) {
                e.stopPropagation();
                return false;
            });

        searchBox.addEventListener("input", this._onSearchChanged.bind(this));
    };

    _onClicked(e) {
        this.focus();
    };

    _onItemSelected(option, e) {
        //e = e.detail || e;
        let optionEl = e.target;

        if (!this.hasClass(optionEl, "disabled")) {
            this.dropdown.classList.remove("open");
            if (this.multiple) {
                if (!this.hasClass(optionEl, "selected")) {
                    this.addClass(optionEl, "selected");
                    this.selectedOptions.push(option);
                }
            } else {
                this.selectedOptions.forEach((item) => {
                    this.removeClass(item.element, "selected");
                });

                this.addClass(optionEl, "selected");
                this.selectedOptions = [option];
            }

            this.dispatchOnChanged(e);

            this._renderSelectedItems();
            this.updateSelectValue();
        }
    };

    dispatchOnChanged(e) {
        if (this.config.onChanged) {
            let values = this.selectedOptions.map((e) => e.data.value);
            this.config.onChanged(values, e);
        }
    };

    updateSelectValue() {
        if (this.multiple) {
            this.selectedOptions.each(function (item) {
                let el = this.el.querySelector('option[value="' + item.data.value + '"]');
                if (el) el.setAttribute("selected", true);
            });
        } else if (this.selectedOptions.length > 0) {
            this.el.value = this.selectedOptions[0].data.value;
        }
        this.triggerChange(this.el);
    };

    _onClickedOutside(e) {
        if (!this.dropdown.contains(e.target)) {
            this.dropdown.classList.remove("open");
        }
    };

    _onKeyPressed(e) {
        e.preventDefault();
        // Keyboard events
        let focusedOption = this.dropdown.querySelector(".focus");

        let open = this.dropdown.classList.contains("open");

        // Space or Enter
        if (e.keyCode == 13) {
            if (open) {
                let event = new CustomEvent("select", {
                    detail: e,
                });
                this.triggerEvent(focusedOption, event);
            } else {
                this.triggerEvent(this.dropdown);
            }
        } else if (e.keyCode == 40) {
            // Down
            if (!open) {
                this.triggerEvent(this.dropdown);
            } else {
                let next = this._findNext(focusedOption);
                if (next) {
                    let t = this.dropdown.querySelector(".focus");
                    this.removeClass(t, "focus");
                    this.addClass(next, "focus");
                    if (!this.isScrolledIntoView(next, next.parentElement)) {
                        next.parentElement.scrollTop += next.offsetHeight;
                    }
                }
            }
            e.preventDefault();
        } else if (e.keyCode == 38) {
            // Up
            if (!open) {
                this.triggerEvent(this.dropdown);
            } else {
                let prev = this._findPrev(focusedOption);
                if (prev) {
                    let t = this.dropdown.querySelector(".focus");
                    this.removeClass(t, "focus");
                    this.addClass(prev, "focus");
                    if (!this.isScrolledIntoView(prev, prev.parentElement)) {
                        prev.parentElement.scrollTop -= prev.offsetHeight;
                    }
                }
            }
            e.preventDefault();
        } else if (e.keyCode == 27 && open) {
            // Esc
            this.triggerEvent(this.dropdown);
        }
        return false;
    };

    _findNext(el) {
        if (el) {
            el = el.nextElementSibling;
        } else {
            el = this.dropdown.querySelector(".list .option");
        }

        while (el) {
            if (!this.hasClass(el, "disabled") && el.style.display != "none") {
                return el;
            }
            el = el.nextElementSibling;
        }

        return null;
    };

    _findPrev(el) {
        if (el) {
            el = el.previousElementSibling;
        } else {
            el = this.dropdown.querySelector(".list .option:last-child");
        }

        while (el) {
            if (!this.hasClass(el, "disabled") && el.style.display != "none") {
                return el;
            }
            el = el.previousElementSibling;
        }

        return null;
    };

    _onSearchChanged(e) {
        e.preventDefault();
        let open = this.dropdown.classList.contains("open");
        let text = e.target.value;
        text = text.toLowerCase();

        if (text == "") {
            this.options.forEach(function (item) {
                item.display = true;
            });
            this._renderItems();
        } else if (open) {
            let matchReg = new RegExp(text);
            this.options.forEach(function (item) {
                let optionText = item.data.text.toLowerCase();
                let matched = matchReg.test(optionText);
                item.display = matched;
            });
            this._renderItems();
        }

        this.dropdown.querySelectorAll(".focus").forEach(function (item) {
            this.removeClass(item, "focus");
        });

        let firstEl = this._findNext(null);
        this.addClass(firstEl, "focus");
    };
}

export default NiceSelect;

