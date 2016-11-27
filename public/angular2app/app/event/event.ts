export interface Event {
    id: string;
    name: string;
    description?: string;
    location?: string;
    timePeriod: TimePeriod;
    eventType?: string;
    slug?: string;
    tickets?: Ticket[];
    imageURL: string;
}

interface TimePeriod {
    start: Date;
    end: Date;
}

export interface Ticket {
    name: string;
    quantityAvailable: number;
    price: Money;
}

interface Money {
    amount: number;
    currency: string;
}

export class InformationRequest {
    firstname: string;
    lastname: string;
    email: string;
    cellphone: string;
    message?: string;
}
