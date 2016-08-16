import { Component } from '@angular/core';

@Component({
    selector: 'event-list',
    templateUrl: 'angular2app/app/event/event-list.component.html',
    styles: [`
        .jumbotron{
            margin-bottom:0px;
        }
    `]
})
export class EventListComponent {
    slider = {
        message: "Próximamente grandes eventos",
        image: "img/events/entrepreneur.jpg",
        title: "Eventos"
    }
}