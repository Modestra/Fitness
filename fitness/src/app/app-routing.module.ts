import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import {AppComponent} from "./app.component";
import {WorkoutComponent} from "./workout/workout.component";

const routes: Routes = [
  {
    path: "",
    component: AppComponent
  },
  {
    path: "workout",
    component: WorkoutComponent
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
