
                    <div class="row">
                        <div class="col-12">
                            <h4  class="display-4">PATIENTS DATA</h4>
                            <table class="table table-no-border">
                                <tr>
                                    <td style="width: 150px">MEDICAL RECORD</td>
                                    <td>:</td>
                                    <td>{{$kasus->pasien->no_rm}}</td>
                                </tr>
                                <tr>
                                    <td>NAME</td>
                                    <td style="width: 10px">:</td>
                                    <td>{{$kasus->pasien->nama}}</td>
                                </tr>
                                <tr>
                                    <td>GENDER</td>
                                    <td>:</td>
                                    <td>{{$kasus->pasien->jenis_kelamin == 'lk' ? 'Man' : 'Woman'}}</td>
                                </tr>
                                <tr>
                                    <td>AGE (Years)</td>
                                    <td>:</td>
                                    <td>{{$kasus->pasien->age}}</td>
                                </tr>
                                <tr>
                                    <td>HEIGHT (CM)</td>
                                    <td>:</td>
                                    <td>{{$kasus->tb}} cm</td>
                                </tr>
                                <tr>
                                    <td>WEIGHT (KG)</td>
                                    <td>:</td>
                                    <td>{{$kasus->bb}} kg</td>
                                </tr>
                            </table>
                        </div>
                    </div>