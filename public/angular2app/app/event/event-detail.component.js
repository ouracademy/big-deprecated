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
var EventDetailComponent = (function () {
    function EventDetailComponent(route, router, service) {
        this.route = route;
        this.router = router;
        this.service = service;
        this.slider = {
            message: "",
            image: "img/events/entrepreneur.jpg",
            title: ""
        };
        this.maxTicketsPerPerson = 4;
    }
    EventDetailComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.sub = this.route.params.subscribe(function (params) {
            var name = params['name'];
            _this.service.getEvent(name).then(function (event) {
                _this.event = event;
                _this.slider.title = event.name;
            });
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
    EventDetailComponent = __decorate([
        core_1.Component({
            selector: 'event-detail',
            templateUrl: 'angular2app/app/event/event-detail.component.html'
        }), 
        __metadata('design:paramtypes', [router_1.ActivatedRoute, router_1.Router, event_service_1.EventService])
    ], EventDetailComponent);
    return EventDetailComponent;
}());
exports.EventDetailComponent = EventDetailComponent;
//# sourceMappingURL=event-detail.component.js.map