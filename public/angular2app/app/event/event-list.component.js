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
var router_1 = require('@angular/router');
var event_service_1 = require('./event.service');
var EventListComponent = (function () {
    function EventListComponent(eventService, router) {
        this.eventService = eventService;
        this.router = router;
        this.slider = {
            message: "Próximamente grandes eventos",
            imageURL: "img/events/entrepreneur.jpg",
            title: "Eventos"
        };
    }
    EventListComponent.prototype.ngOnInit = function () {
        this.getEvents();
    };
    EventListComponent.prototype.getEvents = function () {
        var _this = this;
        this.eventService.getEvents()
            .then(function (events) {
            _this.events = events;
            if (!_this.emptyEvents) {
                _this.slider.message = "Grandes eventos para grandes personas";
            }
            if (_this.events.length === 1) {
                var event_1 = _this.events[0];
                _this.router.navigate(['/eventos', event_1.slug]);
            }
        });
    };
    Object.defineProperty(EventListComponent.prototype, "emptyEvents", {
        get: function () {
            return this.events == null || this.events.length === 0;
        },
        enumerable: true,
        configurable: true
    });
    EventListComponent = __decorate([
        core_1.Component({
            moduleId: module.id,
            selector: 'event-list',
            templateUrl: 'event-list.component.html',
            styles: ["\n        .jumbotron{\n            margin-bottom:0px;\n        }\n    "]
        }), 
        __metadata('design:paramtypes', [event_service_1.EventService, router_1.Router])
    ], EventListComponent);
    return EventListComponent;
}());
exports.EventListComponent = EventListComponent;
//# sourceMappingURL=event-list.component.js.map