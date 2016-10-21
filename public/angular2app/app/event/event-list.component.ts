import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
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

    constructor(private eventService: EventService, private router: Router) { }

    ngOnInit() {
        this.getEvents();
    }

    private getEvents() {
        this.eventService.getEvents()
            .then(events => {
                this.events = events;
                if (!this.emptyEvents) {
                    this.slider.message = "Grandes eventos para grandes personas";
                }

                if(this.events.length === 1) {
                    const event = this.events[0];
                    this.router.navigate(['/eventos', event.slug]);
                }
            });
    }

    get emptyEvents(): boolean {
        return this.events == null || this.events.length === 0;
    }

}