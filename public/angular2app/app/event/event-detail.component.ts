import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { EventService } from './event.service';
import { Event, Ticket } from './event';
import { Subscription } from 'rxjs/Subscription';

@Component({
    selector: 'event-detail',
    templateUrl: 'angular2app/app/event/event-detail.component.html'
})
export class EventDetailComponent implements OnInit {
    private sub: Subscription;
    private event: Event;
    private maxTicketsPerPerson: number = 4;

    constructor(
        private route: ActivatedRoute,
        private router: Router,
        private service: EventService) { }


    ngOnInit() {
        this.sub = this.route.params.subscribe(params => {
            let name = params['name'];
            this.service.getEvent(name).then(event => this.event = event);
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
        return Array.from({ length: ticketOptions + 1 }, (v, k) => k);//+ 1 because array starts at 0
    }
}