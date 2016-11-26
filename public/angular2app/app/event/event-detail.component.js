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
var core_1 = require('@angular/core');
var forms_1 = require('@angular/forms');
var router_1 = require('@angular/router');
var event_service_1 = require('./event.service');
var location_1 = require('../shared/location');
var EventDetailComponent = (function () {
    function EventDetailComponent(route, router, service, formBuilder) {
        this.route = route;
        this.router = router;
        this.service = service;
        this.formBuilder = formBuilder;
        this.slider = {
            title: '',
            imageURL: ''
        };
        this.maxTicketsPerPerson = 4;
        this.alerts = [];
        this.map = {
            location: new location_1.Location('Lima', { latitude: -12.0943939, longitude: -77.0370744 }),
            zoom: 17
        };
    }
    EventDetailComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.sub = this.route.params.subscribe(function (params) {
            var name = params['name'];
            _this.service.getEvent(name).then(function (event) {
                _this.event = event;
                _this.slider = {
                    title: event.name,
                    imageURL: event.imageURL,
                    message: event.description,
                    button: {
                        text: 'Más información',
                        URL: 'https://businessideasgroup.typeform.com/to/Hq9Gq5'
                    }
                };
            });
        });
        this.registerForm = this.formBuilder.group({
            firstname: ['', forms_1.Validators.required],
            lastname: ['', forms_1.Validators.required],
            email: ['', forms_1.Validators.required],
            cellphone: ['', forms_1.Validators.required],
            message: ['']
        });
    };
    EventDetailComponent.prototype.ngOnDestroy = function () {
        this.sub.unsubscribe();
    };
    Object.defineProperty(EventDetailComponent.prototype, "emptyEvent", {
        get: function () {
            return this.event == null;
        },
        enumerable: true,
        configurable: true
    });
    EventDetailComponent.prototype.numberOfTickets = function (ticket) {
        var ticketOptions = this.maxTicketsPerPerson > ticket.quantityAvailable ?
            ticket.quantityAvailable : this.maxTicketsPerPerson;
        //+ 1 because array starts at 0
        return Array.from({ length: ticketOptions + 1 }, function (v, k) { return k; });
    };
    Object.defineProperty(EventDetailComponent.prototype, "latitude", {
        get: function () {
            var result = this.map.location.latitude;
            return result;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(EventDetailComponent.prototype, "longitude", {
        get: function () {
            var result = this.map.location.longitude;
            return result;
        },
        enumerable: true,
        configurable: true
    });
    EventDetailComponent.prototype.onRegister = function () {
        var _this = this;
        this.service.registerInformationRequest(this.event.id, this.registerForm.value)
            .then(function (res) { return _this.showSuccess(); })
            .catch(function (e) { return _this.showError(e.error); });
    };
    EventDetailComponent.prototype.showSuccess = function () {
        this.alerts = [
            {
                type: 'success',
                msg: 'Enviado correctamente :)',
                closable: true
            }
        ];
    };
    EventDetailComponent.prototype.showError = function (errors) {
        var errorMessages = Object.keys(errors).map(function (field) { return errors[field][0]; });
        this.alerts = errorMessages.map(function (errorMessage) {
            return {
                type: 'danger',
                msg: errorMessage
            };
        });
    };
    EventDetailComponent.prototype.closeAlert = function (i) {
        this.alerts.splice(i, 1);
    };
    EventDetailComponent = __decorate([
        core_1.Component({
            moduleId: module.id,
            selector: 'event-detail',
            templateUrl: 'event-detail.component.html?tmplv=v0.0.1',
            styleUrls: ['event-detail.component.css?tmplv=v0.1.0']
        }), 
        __metadata('design:paramtypes', [router_1.ActivatedRoute, router_1.Router, event_service_1.EventService, forms_1.FormBuilder])
    ], EventDetailComponent);
    return EventDetailComponent;
}());
exports.EventDetailComponent = EventDetailComponent;
//# sourceMappingURL=event-detail.component.js.map