import { Routes, RouterModule } from "@angular/router";

import { WelcomeComponent } from "./welcome/welcome.component";
import { AboutComponent } from "./about/about.component";

const appRoutes: Routes = [
  {
    path: "",
    component: WelcomeComponent
  },
  {
      path: "about",
      component: AboutComponent
  }
];

export const routing = RouterModule.forRoot(appRoutes);
