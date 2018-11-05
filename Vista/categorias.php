<? php 
	 categorías de clase {
		 función  pública agregaCategoria ( $ datos ) {
			$ c =  new  conectar ();
			$ conexion = $ c -> conexion ();
			$ sql = " INSERTAR en categories (name)
						values ' $ datos [ 1]' ) " ;
			return  mysqli_query ( $ conexion , $ sql );
		}
		 Función  pública actualizaCategoria ( $ datos ) {
			$ c =  new  conectar ();
			$ conexion = $ c -> conexion ();
			$ sql = " UPDATE categories set name = ' $ datos [ 1 ]'
								donde idCategory = ' $ datos [ 0 ]' " ;
			echo  mysqli_query ( $ conexion , $ sql );
		}
		 Función  pública eliminarCategoria ( $ idCategory) {
			$ c =  new  conectar ();
			$ conexion = $ c -> conexion ();
			$ sql = " DELETE  from categories
					donde idCategory = ' $ idCategory ' " ;
			return  mysqli_query ( $ conexion , $ sql );
		}
	}
 ? >