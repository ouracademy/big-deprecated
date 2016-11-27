import { Injectable } from '@angular/core';
import { Headers, Http } from '@angular/http';
import 'rxjs/add/operator/toPromise';
import { Event, InformationRequest } from './event';

@Injectable()
export class EventService {

    private apiURL = '/event';  // URL to web apiURL
    private headers = new Headers({ 'Content-Type': 'application/json' });


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
        //return Promise.reject(error.message || error);
        return Promise.reject(error.json());
    }

    getEvent(slug: string): Promise<Event> {
        let url = `${this.apiURL}/${slug}`;
        return this.http.get(url)
            .toPromise()
            .then(res => res.json().data as Event)
            .catch(this.handleError);
    }

    registerInformationRequest(eventId: string, input: InformationRequest) {
        let url = `${this.apiURL}/${eventId}/information-request`;
        return this.http
            .post(url, JSON.stringify(input), { headers: this.headers })
            .toPromise()
            .then(res => res.json().data)
            .catch(this.handleError);
    }

    getInformationRequests(eventId: number): Promise<InformationRequest[]> {
        let url = `${this.apiURL}/${eventId}/information-request`;
        return this.http
            .get(url)
            .toPromise()
            .then(res => res.json().data)
            .catch(this.handleError);
    }
}
