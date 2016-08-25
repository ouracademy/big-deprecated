import { Injectable } from '@angular/core';
import { Headers, Http } from '@angular/http';
import 'rxjs/add/operator/toPromise';
import { Event } from './event';

@Injectable()
export class EventService {

    private apiURL = '/event';  // URL to web apiURL

    constructor(private http: Http) {
    }

    getEvents(): Promise<Event[]> {
        return this.http.get(this.apiURL)
            .toPromise()
            .then(res => res.json().data as Event[])
            .catch(this.handleError);
    }

    private handleError(error: any) {
        console.error('An error occurred', error);
        return Promise.reject(error.message || error);
    }

    getEvent(slug: string): Promise<Event>{
        let url = `${this.apiURL}/${slug}`;
        return this.http.get(url)
            .toPromise()
            .then(res => {
                console.log(res.json().data);
                return res.json().data as Event;

            })
            .catch(this.handleError);
    }
}