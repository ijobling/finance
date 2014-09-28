@extends('master') 
@section('content') 
<div id="main_wrapper">
			<div class="page_content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6">
							<div class="panel panel-default">
								<div class="panel-heading">Invoeren niewe abbonementensoort</div>
								<div class="panel-body">
									 <div id="wizard_form">
													<section>
												      <div class="form-group">
                                 {{ Form::open(['route' => 'abbonementen.store']) }}
													       {{ Form::select('abbonement-soort', ['Jaarabbonement - groot', 'Jaarabbonement -middel', 'Jaarabbonement - klein ', 'knipkaart']) }};
												      </div>
												      <div class="form-group">
													          {{ Form::label('bedrag', 'Bedrag') }}
                                    {{ Form::input('decimal', 'bedrag') }}
											 	    </div>
                           {{Form::submit('abbonementen opslaan')}}
                           {{Form::close()}}
                   </div>
                </div>
             </div>
          </div>
       </div>
     </div>
 </div> 
