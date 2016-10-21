import { ModuleWithProviders } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {
    loginRoutes,
    authProviders
} from './auth/login.routing';
import { AuthGuard } from './auth/auth-guard.service';

import { WelcomeComponent } from './welcome/welcome.component';
import { AboutComponent } from './about/about.component';
import { EventListComponent } from './event/event-list.component';
import { EventDetailComponent } from './event/event-detail.component';
import { ContactComponent } from './contact/contact.component';

import { ParticipantRegisterComponent } from './participant/participant-register.component';

const appRoutes: Routes = [
    {
        path: '',
        component: WelcomeComponent
    },
    {
        path: 'nosotros',
        component: AboutComponent
    },
    {
        path: 'eventos',
        component: EventListComponent
    },
    {
        path: 'eventos/:name',
        component: EventDetailComponent
    },
    {
        path: 'registrarme/al/evento/:name',
        component: ParticipantRegisterComponent,
        canActivate: [AuthGuard]
    },
    {
        path: 'contactenos',
        component: ContactComponent
    },
    ...loginRoutes
];

export const appRoutingProviders: any[] = [
    authProviders
];
export const routing: ModuleWithProviders = RouterModule.forRoot(appRoutes);
