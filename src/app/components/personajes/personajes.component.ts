import { Component, OnInit } from '@angular/core';
import { ApiService } from '../../services/api.service';

@Component({
  selector: 'app-personajes',
  templateUrl: './personajes.component.html',
})
export class PersonajesComponent implements OnInit {
  personajes: any[] = [];
  personajeSeleccionado: any = null;

  constructor(private api: ApiService) {}

  ngOnInit() {
    this.api.getPersonajes().subscribe((data) => {
      this.personajes = data.results;
    });
  }

  verDetalle(id: number) {
    console.log('Click funcionando, ID:', id);

    this.api.getPersonaje(id).subscribe((data) => {
      this.personajeSeleccionado = data;
      console.log('DATA COMPLETA:', data);
    });
  }
}
