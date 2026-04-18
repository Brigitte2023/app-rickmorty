import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root',
})
export class ApiService {
  private apiUrl = 'https://rickandmortyapi.com/api/character';

  constructor(private http: HttpClient) {}

  getPersonajes(): Observable<any> {
    return this.http.get(this.apiUrl);
  }

  getPersonaje(id: number): Observable<any> {
    return this.http.get(`${this.apiUrl}/${id}`);
  }
}
