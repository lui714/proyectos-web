import { IEditor } from './../interfaces/EditoresInterface';
import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { environment } from '../../environments/environment.prod';

const URL = environment.url;

@Injectable({
  providedIn: 'root'
})
export class EditoresService {

  constructor(private http: HttpClient) { }

  async getAll():Promise<IEditor[]>{
    let ruta = URL + 'editores';
    return new Promise ( resolve => {
      this.http.get<IEditor[]>(ruta)
        .subscribe (data => {
          resolve(data);
        });
    });
  }
}
