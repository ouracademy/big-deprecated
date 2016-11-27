import { Component, OnInit } from '@angular/core';
import { EventService } from './event.service';
import { InformationRequest } from './event';

@Component({
    moduleId: module.id,
    selector: 'information-request-list',
    templateUrl: 'information-request-list.component.html'
})
export class InformationRequestListComponent implements OnInit {
    public informationRequests: InformationRequest[];

    constructor(private eventService: EventService) { }

    ngOnInit() {
        this.eventService.getInformationRequests(1).then((x) => this.informationRequests = x);
    }
}
