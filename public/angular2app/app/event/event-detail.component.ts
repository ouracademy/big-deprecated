import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { EventService } from './event.service';
import { Event } from './event';
import { Subscription } from 'rxjs/Subscription';

@Component({
    selector: 'event-detail',
    templateUrl: 'angular2app/app/event/event-detail.component.html'
})
export class EventDetailComponent implements OnInit {
    private sub: Subscription;
    private event: Event;

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

    get emptyEvent(){
        return this.event == null;
    }
}