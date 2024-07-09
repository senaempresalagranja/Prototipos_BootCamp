<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                
            </div>
            <div class="content">
                
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Area</label>
                                    <select class="form-control" id="frmarea">
                                        
                                    </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fecha Inicio</label>
                                    <input type="text" class="form-control border-input docs-date" id="fecha_inicial1" data-toggle="datepicker">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fecha Final</label>
                                    <input type="text" class="form-control border-input docs-date" id="fecha_final1" data-toggle="datepicker">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <center><button type="submit" class="btn btn-info btn-fill btn-wd" onclick="drawBasic1();">Consultar</button></center>
                        </div>
                    </div>

                <div class="footer">
                    
                </div>
            </div>
        </div>

        <div class="card">
            <div class="header">
                <h4 class="title">Informacion PQRS</h4>
                    <p class="category">24 Hours performance</p>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div id="columnchart_values1">
                    
                        </div>
                    </div>
                </div>                 
            <div class="footer">
                <div class="chart-legend">
                    <i class="fa fa-circle text-info"></i> Open
                    <i class="fa fa-circle text-danger"></i> Click
                    <i class="fa fa-circle text-warning"></i> Click Second Time
                </div>
                        <hr>
                            <div class="stats">
                                <i class="ti-reload"></i> Updated 3 minutes ago
                            </div>
            </div>
            </div>
        </div>
    </div>
</div>