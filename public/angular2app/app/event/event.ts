export interface Event {
    name: string;    
    description?: string;
    location?: string;
    timePeriod: TimePeriod;
    eventType?: string;
    slug?: string;
}

interface TimePeriod{
    start: Date;
    end: Date;
}