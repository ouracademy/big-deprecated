import { Component, OnInit } from '@angular/core';
import { Event } from './event';
import { EventService } from './event.service';
import { Slider } from '../shared/slider/slider';

@Component({
    moduleId: module.id,
    selector: 'event-list',
    templateUrl: 'event-list.component.html',
    styles: [`
        .jumbotron{
            margin-bottom:0px;
        }
    `]
})
export class EventListComponent implements OnInit {
    slider: Slider = {
        message: "Próximamente grandes eventos",
        imageURL: "img/events/entrepreneur.jpg",
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