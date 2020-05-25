namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Hash;
use Caffeinated\Shinobi\Models\Role;
use App\User;
use App\Pregunta;



class UserController extends Controller
{
    //
    public function getIndex()
    {
        $rol = Role::orderBy('id', 'asc')->get();
        $preguntas = Pregunta::orderBy('id', 'asc')->get();
        //dd($rol);
        return view('sistema.usuarios.index', compact( 'rol', 'preguntas'));
    }

    public function getData(Request $request)
    {
        $usuarios = DB::table('users')
            ->join('role_user', 'role_user.user_id', '=', 'users.id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->select("users.id",
                "cedula",
                DB::raw("concat(apellidos,', ',nombres) as nombres"),
                "celular",
                "users.user",
                DB::raw("roles.name as rol"));
        /*if(Auth::user()->rol != 10){->where('users.id', '<>', '1' )
            $usuarios->where('users.rol', '<>', '10' );
        }*/
 

        $datatables = Datatables::of($usuarios)
            ->addColumn('accion', function ($usuario) {
				
                $btn = '<div class="btn-group">
                      <button type="button" class="btn btn-sm btn-icon btn-default dropdown-toggle" data-toggle="dropdown"
                        aria-expanded="false" aria-hidden="true">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                      </button>
                      <div class="dropdown-menu" role="menu">';
               
                    $btn .='<a class="dropdown-item no-decoracion-a" href="javascript:void(0)" role="menuitem" onclick="findUpdateUsu('.$usuario->id.')">
                            <i class="fa fa-edit" aria-hidden="true"></i> Editar
                          </a>';
    
                    $btn .='<a class="dropdown-item no-decoracion-a" href="javascript:void(0)" role="menuitem" onclick="deleteUsu('.$usuario->id.')">
                            <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
                          </a>';
              
                    $btn .='<a class="dropdown-item no-decoracion-a" href="javascript:void(0)" role="menuitem" onclick="showUsu('.$usuario->id.')">
                            <i class="fa fa-eye" aria-hidden="true"></i> Ver
                          </a>
						</div>
                    </div>';

                return  $btn;

            })
            ->filterColumn('nombres', function($query, $keyword) {
                $sql = "concat(apellidos,',',nombres)  ilike ?";
                $query->whereRaw($sql, ["%{$keyword}%"]);
            })
            ->rawColumns(['accion']);

        return $datatables->make(true);
    }

    public function agregarUsuario(Request $request)
    {
        try{

            $request->validate([
                'cedula' => 'required',
                'nombres' => 'required',
                'apellidos' => 'required',
                'telefono' => 'required',
                'celular' => 'required',
                'email' => 'required|email',
                'user' => 'required',
                'rol' => 'required',
            ]);


                $arr = $request->all();
                $arr["email_verified_at"] = \date('Y-m-d H:m:s');
                $arr['pregunta_id'] = 1;
                $arr['password'] = bcrypt('123456');
                $arr['respuesta'] = bcrypt('123456');
                // dd($arr);

                $user = User::create($arr);
                $user->roles()->sync($request->get('rol'));
                
                return response()->json([
                    'status' => 1,
                    'msg' => 'Registro agregado, la clave por defecto es "123456", la pregunta por defecto es la #1  y la respuesta "123456"'
                ]);
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

    public function buscarUsuario(Request $request)
    {
        if($request->ajax()) {
            $usuario = User::find($request->id);
            $usuario->roles;
            return response()->json($usuario);
        }
    }

    public function actualizarUsuario(Request $request)
    {
        try{

            $request->validate([
                'cedula' => 'required',
                'nombres' => 'required',
                'apellidos' => 'required',
                'telefono' => 'required',
                'celular' => 'required',
                'email' => 'required|email',
                'user' => 'required',
                'rol' => 'required',
            ]);

            $arr = $request->all();

            $usuario = User::find($request->user_id);
            $usuario->update($arr);

            $usuario->roles()->sync($request->get('rol'));;

        
            return response()->json(array(
                'status' => 1,
                'msg' => 'Registro actualizado',
            ));


        }
        catch (QueryException $e) {
            if ($request->ajax()) {
                return response()->json(array(
                    'status' => 0,
                    'msg' => UtilidadesController::errorPostgres($e->getCode())
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

    

    
    public function eliminarUsuario(Request $request)
    {
        try{
            if($request->ajax()) {
                
                $deletedRows = User::where('id', $request->id )->delete();
                if ($deletedRows == 1) {
				
                    return response()->json(array(
                        'status' => 1,
                        'msg' => 'Registro eliminado',
                    ));
                } else {
                    return response()->json(array(
                        'status' => 0,
                        'msg' => 'No se pudo eliminar el registro',
                    ));
                }
            }
        }
        catch (QueryException $e) {
            if ($request->ajax()) {
                return response()->json(array(
                    'status' => 0,
                    'msg' => UtilidadesController::errorPostgres($e->getCode())
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
}