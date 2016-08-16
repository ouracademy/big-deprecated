import { Routes, RouterModule } from "@angular/router";

import { WelcomeComponent } from "./welcome/welcome.component";
import { AboutComponent } from "./about/about.component";
import { EventListComponent } from "./event/event-list.component";
import { ContactComponent } from "./contact/contact.component";

const appRoutes: Routes = [
  {
    path: "",
    component: WelcomeComponent
  },
  {
      path: "about",
      component: AboutComponent
  },
  {
      path: "event",
      component: EventListComponent
  },
  {
      path: "contact",
      component: ContactComponent
  }
];

export const routing = RouterModule.forRoot(appRoutes);
