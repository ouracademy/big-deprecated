"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var core_1 = require("@angular/core");
var contact_service_1 = require('./contact.service');
var forms_1 = require('@angular/forms');
var ContactComponent = (function () {
    function ContactComponent(contactService, builder) {
        this.contactService = contactService;
        this.slider = {
            title: "Contáctenos",
            image: "img/contact/business-world.jpg",
            message: "Conéctate con nosotros"
        };
        this.BIG = {
            email: "info@businessideasgroup.com.pe",
            location: "Calle Ramón Cerdeira #175, dep. 301, San Borja(Perú, Lima 36)"
        };
        this.submitAttemp = false;
        this.message = new forms_1.FormControl("", forms_1.Validators.required);
        this.name = new forms_1.FormControl("", forms_1.Validators.required);
        this.email = new forms_1.FormControl("", forms_1.Validators.required);
        this.contactForm = builder.group({
            message: this.message,
            from: builder.group({
                name: this.name,
                email: this.email
            })
        });
    }
    ContactComponent.prototype.onSubmit = function () {
        var _this = this;
        this.contactService.send(this.contactForm.value).then(function () {
            _this.contactForm.reset();
            _this.submitAttemp = true;
        });
    };
    ContactComponent = __decorate([
        core_1.Component({
            moduleId: module.id,
            selector: "contact",
            templateUrl: "contact.component.html",
            styleUrls: ["contact.component.css"]
        }), 
        __metadata('design:paramtypes', [contact_service_1.ContactService, forms_1.FormBuilder])
    ], ContactComponent);
    return ContactComponent;
}());
exports.ContactComponent = ContactComponent;
//# sourceMappingURL=contact.component.js.map