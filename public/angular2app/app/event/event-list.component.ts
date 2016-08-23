import { Component, OnInit } from '@angular/core';
import { Event } from './event';
import { EventService } from './event.service';

@Component({
    selector: 'event-list',
    templateUrl: 'angular2app/app/event/event-list.component.html',
    styles: [`
        .jumbotron{
            margin-bottom:0px;
        }
    `]
})
export class EventListComponent implements OnInit {
    slider = {
        message: "Próximamente grandes eventos",
        image: "img/events/entrepreneur.jpg",
        title: "Eventos"
    }
    events: Array<Event>;

    constructor(private eventService: EventService) { }

    ngOnInit() {
        this.getEvents();
    }

    private getEvents() {
        this.eventService.getEvents()
            .then(events => {
                this.events = events;
                if(!this.emptyEvents) {
                    this.slider.message = "Grandes eventos para grandes personas";
                }
            });
    }

    get emptyEvents(): boolean{
        return this.events == null || this.events.length === 0;
    }

}