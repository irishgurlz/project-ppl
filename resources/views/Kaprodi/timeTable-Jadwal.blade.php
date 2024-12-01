
        <table class="table table-bordered mt-3" style="border-color: black; border-width: 2px; border-radius:15px">
            <thead class="" style="position: sticky; top: 0; z-index: 1;">
                <tr>
                    <th>Waktu</th>
                    <th>Senin</th>
                    <th>Selasa</th>
                    <th>Rabu</th>
                    <th>Kamis</th>
                    <th>Jumat</th>
                </tr>
            </thead>
            <tbody>
                <!-- Waktu 06:00 - 07:00 -->
                <tr>
                    <td style="background-color: #a085bc;" class="text-white">06:00</td>
                    {{-- senin jam 6 --}}
                    <td class="timetable-cell" data-mata-kuliah="" >
                        <table class="tab">
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Senin' && $item->jam_mulai == '06:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    {{-- selasa jam 6 --}}
                    <td class="timetable-cell" data-mata-kuliah="" >
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Selasa' && $item->jam_mulai == '06:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td class="timetable-cell" data-mata-kuliah="" >
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Rabu' && $item->jam_mulai == '06:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td class="timetable-cell" data-mata-kuliah="" >
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Kamis' && $item->jam_mulai == '06:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td class="timetable-cell" data-mata-kuliah="" >
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Jumat' && $item->jam_mulai == '06:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                </tr>
                <!-- Waktu 07:00 - 08:00 -->
                <tr style="background-color: #DBDDF4; ">
                    <td class="text-white">07:00</td>
                    <td style="background-color: #DBDDF4;" id="sesi-2-senin" class="timetable-cell" data-mata-kuliah="">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Senin' && $item->jam_mulai == '07:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </td>
                    <td style="background-color: #DBDDF4;" class="timetable-cell" data-mata-kuliah="" >
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Selasa' && $item->jam_mulai == '07:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;" class="timetable-cell" data-mata-kuliah="" >
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Rabu' && $item->jam_mulai == '07:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;" class="timetable-cell" data-mata-kuliah="" >
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Kamis' && $item->jam_mulai == '07:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;"class="timetable-cell" data-mata-kuliah="" >
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Jumat' && $item->jam_mulai == '07:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                </tr>
                <!-- Waktu 08:00 - 09:00 -->
                <tr>
                    <td style="background-color: #a085bc;" class="text-white">08:00</td>
                    <td class="timetable-cell" data-mata-kuliah="" >
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Senin' && $item->jam_mulai == '08:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td class="timetable-cell" data-mata-kuliah="" >
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Selasa' && $item->jam_mulai == '08:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td class="timetable-cell" data-mata-kuliah="" >
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Rabu' && $item->jam_mulai == '08:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td class="timetable-cell" data-mata-kuliah="" >
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Kamis' && $item->jam_mulai == '08:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td class="timetable-cell" data-mata-kuliah="" >
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Jumat' && $item->jam_mulai == '08:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                </tr>
                <!-- Waktu 09:00 - 10:00 -->
                <tr>
                    <td class="text-white">09:00</td>
                    <td style="background-color: #DBDDF4;" class="timetable-cell" data-mata-kuliah="" >
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Senin' && $item->jam_mulai == '09:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;" class="timetable-cell" data-mata-kuliah="" >
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Selasa' && $item->jam_mulai == '09:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;" class="timetable-cell" data-mata-kuliah="" >
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Rabu' && $item->jam_mulai == '09:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;" class="timetable-cell" data-mata-kuliah="" >
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Kamis' && $item->jam_mulai == '09:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;" class="timetable-cell" data-mata-kuliah="" >
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Jumat' && $item->jam_mulai == '09:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                </tr>
                <!-- Waktu 10:00 - 11:00 -->
                <tr>
                    <td style="background-color: #a085bc;" class="text-white">10:00</td>
                    <td id="sesi-5-senin" class="timetable-cell" data-mata-kuliah="">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Senin' && $item->jam_mulai == '10:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td>
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Sekasa' && $item->jam_mulai == '10:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td>
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Rabu' && $item->jam_mulai == '10:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td>
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Kamis' && $item->jam_mulai == '10:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td id="sesi-5-jumat" class="timetable-cell" data-mata-kuliah="">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Jumat' && $item->jam_mulai == '10:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                </tr>
                <!-- Waktu 11:00 - 12:00 -->
                <tr>
                    <td  class="text-white">11:00</td>
                    <td style="background-color: #DBDDF4;">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Senin' && $item->jam_mulai == '11:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Selasa' && $item->jam_mulai == '11:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Rabu' && $item->jam_mulai == '11:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Kamis' && $item->jam_mulai == '11:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Jumat' && $item->jam_mulai == '11:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                </tr>
                <!-- Waktu 12:00 - 13:00 -->
                <tr>
                    <td style="background-color: #a085bc;" class="text-white">12:00</td>
                    <td>
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Senin' && $item->jam_mulai == '12:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td>
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Selasa' && $item->jam_mulai == '12:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td>
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Rabu' && $item->jam_mulai == '12:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td>
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Kamis' && $item->jam_mulai == '12:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td>
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Jumat' && $item->jam_mulai == '12:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                </tr>
                <!-- Waktu 13:00 - 14:00 -->
                <tr>
                    <td class="text-white">13:00</td>
                    <td style="background-color: #DBDDF4;">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Senin' && $item->jam_mulai == '13:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Selasa' && $item->jam_mulai == '13:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Rabu' && $item->jam_mulai == '13:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Kamis' && $item->jam_mulai == '12:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Jumat' && $item->jam_mulai == '13:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                </tr>
                <!-- Waktu 14:00 - 15:00 -->
                <tr>
                    <td style="background-color: #a085bc;" class="text-white">14:00</td>
                    <td>
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Senin' && $item->jam_mulai == '14:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td>
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Selasa' && $item->jam_mulai == '14:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td>
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Rabu' && $item->jam_mulai == '14:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td>
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Kamis' && $item->jam_mulai == '14:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td>
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Jumat' && $item->jam_mulai == '14:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                </tr>
                <!-- Waktu 15:00 - 16:00 -->
                <tr>
                    <td class="text-white">15:00</td>
                    <td style="background-color: #DBDDF4;">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Senin' && $item->jam_mulai == '15:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Selasa' && $item->jam_mulai == '15:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Rabu' && $item->jam_mulai == '15:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Kamis' && $item->jam_mulai == '15:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Jumat' && $item->jam_mulai == '15:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                </tr>
                <!-- Waktu 16:00 - 17:00 -->
                <tr>
                    <td style="background-color: #a085bc;" class="text-white">16:00</td>
                    <td>
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Senin' && $item->jam_mulai == '16:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 

                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td>
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Selasa' && $item->jam_mulai == '16:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 

                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td>
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Rabu' && $item->jam_mulai == '16:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 

                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td>
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Kamis' && $item->jam_mulai == '16:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 

                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td>
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Jumat' && $item->jam_mulai == '16:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 

                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                </tr>
                <!-- Waktu 17:00 - 18:00 -->
                <tr>
                    <td class="text-white">17:00</td>
                    <td style="background-color: #DBDDF4;" class="timetable-cell" data-mata-kuliah="" >
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Senin' && $item->jam_mulai == '17:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Selasa' && $item->jam_mulai == '17:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Rabu' && $item->jam_mulai == '17:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Kamis' && $item->jam_mulai == '17:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                    <td style="background-color: #DBDDF4;">
                        <table>
                            <thead>
                            </thead>
                            <tbody>
                                @forelse ($jadwal as $item)
                                <tr>
                                    @if ($item->hari == 'Jumat' && $item->jam_mulai == '17:00:00')
                                    <div class="" style="margin-bottom:10px; border-radius:10px; background-color: #F6C6EA; font-size: 15px;">                                        
                                        <div style="margin-left: 10px; font-weight: bold">{{ $item->listMataKuliah->nama_mata_kuliah }} {{$item->kelas_matkul}}</div>
                                        <div style="margin-left: 10px">{{ $item->kodemk }} (SMT {{ $item->listMataKuliah->semester }}) ({{ $item->listMataKuliah->sks }} SKS)</div>
                                        @php
                                            
                                            $startTime = strtotime($item->jam_mulai); 
                                            $endTime = strtotime($item->jam_selesai); 
    
                                            $startTimeFormatted = date('H:i', $startTime);
                                            $endTimeFormatted = date('H:i', $endTime);
                                        @endphp
                                        <div style="margin-left: 10px">
                                            <p class="m-0">{{$startTimeFormatted }} - {{$endTimeFormatted}} {{$item->ruang->nama_ruang}}</p>
                                        </div>
                                    </div>
                                    @endif
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="1">Tidak ada jadwal untuk waktu ini</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table> 
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
    

            </div>
        </div>
    </div>
</div>

