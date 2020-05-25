class NoticiasController extends Controller
{
    public function getIndex()
    {
        return view('sistema.index', compact('ttal_per', 'anios'));
    }

    public function getLogin()
    {
        return view('sistema.login.login');
    }

    public function validateLogin(Request $request)
    {
        try{
			if(Auth::attempt(['user' => $request->user, 'password' => $request->password])){
				 return response()->json(array('status' => '1'));
			}
			else{
				return response()->json(array(
					'status' => '0',
					'msg' => 'Error, no se pudo validar sus datos',
				));
			}
        }
        catch (QueryException $e) {
            if ($request->ajax()) {
                return response()->json(array(
                    'status' => 0,
                    'msg' => $e->getCode().'-'.$e->getMessage()
                ));
            }
        }
        catch (Exception $e) {
            if ($request->ajax()) {
                return response()->json(array(
                    'status' => 0,
                    'msg' => $e->getCode().'-'.$e->getMessage()
                ));
            }
        }

    }

    public function getLogout()
    {
        Auth::logout();
        Session::flush();

        return response()->redirectToRoute('sistema.acceso')
            ->header('Cache-control', 'no-store, no-cache, must-revalidate, max-age=0')
            ->header('Pragma', 'no-cache')
            ->header('Expires', 'Sat, 01 Jan 1990 00:00:00 GTM ');
    }

    public function getRegistro()
    {
        $preguntas = Pregunta::all();
        return view('sistema.login.registro', compact('preguntas'));
    }

    
    public function registarUsuario(Request $request)
    {
        if ($request->ajax()) {

            $count = Usuario::where('cedula', $request->cedula)->count();

            try {
                $request->validate([
                    'codper' => 'required',
                    'cedula' => 'required',
                    'nombres' => 'required',
                    'apellidos' => 'required',
                    'telefono' => 'required',
                    'celular' => 'required',
                    'email' => 'required|email',
                    'password' => 'required',
                    'pregunta_id' => 'required',
                    'respuesta' => 'required'
                ]);

                    if ($count == 0) {
                        $arr = $request->all();
                        $arr["email_verified_at"] = \date('Y-m-d H:m:s');

                        $arr['password'] = bcrypt($request->password);
                        $arr['respuesta'] = bcrypt($request->respuesta);
                        $arr['user'] = $request->cedula;
                        User::create($arr);
						
                        return response()->json([
                            'status' => 1,
                            'msg' => 'El registro se llevo acabo con exito'
                        ]);
                    } else {
                        return response()->json([
                            'status' => 0,
                            'msg' => 'Ya esta registrado en el sistema!!!'
                        ]);
                    }

            } catch (QueryException $e) {
                return response()->json(array(
                    'status' => 0,
                    'msg' => $e->getCode() . '-' . $e->getMessage()
                ));
            } catch (Exception $e) {
                return response()->json(array(
                    'status' => 0,
                    'msg' => $e->getCode() . '-' . $e->getMessage()
                ));
            }
        }
    }

    public function getRecuperar(Request $request)
    {
        $preguntas = Pregunta::all();
        return view('sistema.login.recuperar', compact('preguntas'));
    }

    public function recuperarClave(Request $request)
    {
        if ($request->ajax()) {

            $request->validate([
                'user' => 'required',
                'password' => 'required',
                'pregunta_id' => 'required',
                'respuesta' => 'required'
            ]);

            try {

                $user1 = User::where('user', $request->user)->first();

                if($request->user == $user1->user &&
                    $request->pregunta_id == $user1->pregunta_id &&
                    Hash::check($request->respuesta, $user1->respuesta)) {

                    $arr = ['password' => bcrypt($request->password)];
                    $user1->update($arr);
                   
                    return response()->json(array(
                        'status' => 1,
                        'msg' => 'Clave actualizada',
                    ));
                }
                else{
                    return response()->json(array(
                        'status' => 0,
                        'msg' => 'No se pudo verificar los datos para poder cambiar la clave, verifique he intente de nuevo!!!',
                    ));
                }
            } catch (QueryException $e) {
                return response()->json(array(
                    'status' => 0,
                    'msg' => $e->getCode() . '-' . $e->getMessage()
                ));
            } catch (Exception $e) {
                return response()->json(array(
                    'status' => 0,
                    'msg' => $e->getCode() . '-' . $e->getMessage()
                ));
            }
        }
    }
}
