import { Injectable } from '@angular/core';
import { Headers, Http } from '@angular/http';
import 'rxjs/add/operator/toPromise';
import Message from './message';

@Injectable()
export class ContactService {

    private apiURL = 'http://localhost:8000/contact';  // URL to web api
    private headers: Headers;

    constructor(private http: Http) { 
        this.headers = new Headers({'Content-Type': 'application/json'});
    }

    send(message: Message) {
        return this.http
                    .post(this.apiURL, JSON.stringify(message), {headers: this.headers})
                    .toPromise()
                    .then(res => res.json().data)
                    .catch(this.handleError);
    }

    private handleError(error: any) {
        console.error('An error occurred', error);
        return Promise.reject(error.message || error);
    }
}