@extends('layouts.inde')

@section('template_title')
    Module
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Modulos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('modules.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Modulo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">



                                       <th>ID</th>

										<th>Modulo</th>

                                        <th></th>
                                    </tr>
                                        </div>
                                </thead>

                                <br>
                                <tbody>
                                    @foreach ($modules as $module)
                                    <div class="service-box">

                                        <tr >
                                            <div class="center1"</div>
                                            <td>{{ ++$i }}</td>

											<td>{{ $module->nombre }}</td>

                                            <td>
                                                <form action="{{ route('modules.destroy',$module->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('modules.show',$module->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('modules.edit',$module->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>

                                                </form>
                                                </div>
                                            </td>
                                        </tr>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $modules->links() !!}
            </div>
        </div>
    </div>
@endsection
