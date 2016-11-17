import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { EventService } from './event.service';
import { Event, Ticket } from './event';
import { Subscription } from 'rxjs/Subscription';
import { Slider } from '../shared/slider/slider';
import { Location } from '../shared/location';

@Component({
    moduleId: module.id,
    selector: 'event-detail',
    templateUrl: 'event-detail.component.html?tmplv=v0.0.1',
    styleUrls: ['event-detail.component.css?v=v0.0.1']
})
export class EventDetailComponent implements OnInit {
    slider: Slider = {
        title: '',
        imageURL: ''
    };
    private sub: Subscription;
    private event: Event;
    private maxTicketsPerPerson: number = 4;
    map = {
        location: new Location('Lima', { latitude: -12.0943939, longitude: -77.0370744 }),
        zoom: 17
    };


    constructor(
        private route: ActivatedRoute,
        private router: Router,
        private service: EventService) { }


    ngOnInit() {
        this.sub = this.route.params.subscribe(params => {
            let name = params['name'];
            this.service.getEvent(name).then(event => {
                this.event = event;
                this.slider = {
                    title: event.name,
                    imageURL: event.imageURL,
                    message: event.description,
                    button: {
                        text: 'Registrate',
                        URL: 'https://businessideasgroup.typeform.com/to/Hq9Gq5'
                    }
                }
            });
        });
    }

    ngOnDestroy() {
        this.sub.unsubscribe();
    }

    get emptyEvent() {
        return this.event == null;
    }

    numberOfTickets(ticket: Ticket): Array<number> {
        let ticketOptions = this.maxTicketsPerPerson > ticket.quantityAvailable ?
            ticket.quantityAvailable : this.maxTicketsPerPerson;

        //+ 1 because array starts at 0
        return Array.from({ length: ticketOptions + 1 }, (v, k) => k);
    }

    get latitude(): number {
        let result = this.map.location.latitude;
        return result;
    }

    get longitude(): number {
        let result = this.map.location.longitude;
        return result;
    }
}