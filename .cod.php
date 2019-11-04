4.3
function createForm1Contacto (){
        return view('tarea43/form1');
    }

    public function storeForm1Contacto (Request $request)
    {
    	$nom=$request->input("nombre")." ".$request->input("apellido");
        return view ("tarea42/saludoNombre",['nombre' => $nom,'color' => $request->input("Color")]);
    } 

    function createForm2Contacto (){
        return view('tarea43/form2');
    }    

    public function storeForm2Contacto (Request $request)
    {
        $nom=$request->input("Nombre")." ".$request->input("Apellido");
        $json = File::get(base_path('database/data/saludos.json'));
        $idiomas = json_decode($json);

        return view ("tarea43/saludoMulti",['nombre' => $nom,'idiomas' => $idiomas]);
    } 
    function createForm3Contacto (){
        return view('tarea43/form3');
    }    

    public function storeForm3Contacto ()
    {
        //Otra forma de acceder al request, no lo pasamos como parametro, quitar Request $request
        $nom=request('nombre')." ".request('apellido');
        $json = File::get(base_path('database/data/saludos.json'));
        $idiomas = json_decode($json);

        return view ("tarea43/form3",['nombre' => $nom,'idiomas' => array_values($idiomas)]);
    } 



4.4 b)

Para formularios pequeños, hacer la validación en el controlador es una opción.
En cambio, para validaciones más complejas es adecuado, utilizar form object.

1. php artisan make:request FormRequest
2. Se ha creado en http/controllers/request

Esta clase extiende de ‘Request’  y tiene dos métodos:
- authorize. Sirve para determinar si el usuario está autorizado a efectuar esa operación (si cualquier usuario puede utilizar ese formulario return true)
	public function authorize() {
        return true;
    }
- rules. Devuelve un array de reglas de validación
	public function rules()	{
	return [   
		’name' => 'required|min:5|max:25',
       		’email' => 'required|email'       
        ];
	 }
3. Luego hay que inyectar la clase en el método correspondiente:

public function saveProfile(UserProfileRequest $request) {
  //…
}

El método se ejecutara solo si va validación es válida.
