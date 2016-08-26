export interface Event {
    name: string;    
    description?: string;
    location?: string;
    timePeriod: TimePeriod;
    eventType?: string;
    slug?: string;
    tickets?: Ticket[];
}

interface TimePeriod{
    start: Date;
    end: Date;
}

export interface Ticket{
    name: string;
    quantityAvailable: number;
}