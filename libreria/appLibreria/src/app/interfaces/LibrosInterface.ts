export interface MsnApiLibros {
  libro_id: number;
  nombre_libro: string;
  descripcion: string;
  categoriaid: number;
  editorid: number;
  precio: number;
  entrega: number;
  imagen: number;
  nombre_categoria: string;
  nombre_editorial: string;
}

export interface MsnApiLibros1{
  status?: string;
  errors?: string;
  //data?: ILibro[];
}
