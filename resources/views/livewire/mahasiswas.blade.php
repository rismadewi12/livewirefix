<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Data Mahasiswa Teknik Informatika</h2>
</x-slot>

<div class="py-12">
    <div class=" max-w-7xl mx-auto ...">
        <div class='bg-white overflow-hidden shadow-xl sm::rounded-lg px-4 py-4'>
            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message')}} </p>
                    </div>
                </div>
            </div>
            @endif

            <button wire:click="create" class="bg-purple-500 hover:bg-purple-500 text-white font-bold py-2 px-2 rounded my-2"> Create Data</button>
            @if ($isModal)
                @include("livewire.create")
            @endif

            <div class="bg-teal-100 border-t-4 border-teal-500- rounded-b text-teal-900 px-4 pt-3 shadow-md my-3">
                <div class="flex">
                    <input type="text" class="form-control" placeholder="Search...." wire:model="search">
                </div>
            <table class='table-fixed w-full text-white font-bold' style="border: 2px solid;">
                <thead>
                    <tr class="bg-gray-100" style="background-color:#6D28D9; ">
                        <th class="px-4 py-2" style="border: 1px solid;">Nama</th>
                        <th class="px-4 py-2" style="border: 1px solid;">NIM</th>
                        <th class="px-4 py-2" style="border: 1px solid;">Prodi</th>
                        <th class="px-4 py-2" style="border: 1px solid;">Semester</th>
                        <th class="px-4 py-2" style="border: 1px solid;">Status</th>
                        <th class="px-4 py-2" style="border: 1px solid;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($mahasiswas as $row)
                    <tr>
                        <td class="boder px-4 py-2 text-black " style="border: 1px solid;text-align:center;">{{ $row -> nama }}</td>
                        <td class="boder px-4 py-2 text-black " style="border: 1px solid;text-align:center;">{{ $row -> nim }}</td>
                        <td class="boder px-4 py-2 text-black " style="border: 1px solid;text-align:center;">{{ $row -> prodi }}</td>
                        <td class="boder px-4 py-2 text-black " style="border: 1px solid;text-align:center;">{{ $row -> semester }}</td>
                        <td class="boder px-4 py-2 text-black " style="border: 1px solid;text-align:center;">{{ $row -> status }}</td>
                        <td  class="boder px-4 py-2 text-black " style="border: 1px solid;text-align:center;">
                            <button wire:click="edit({{ $row -> id}})" class="bg-green-500 hover:bg-green-500 text-white font-bold py-2 px-2 rounded">Edit</button>
                            <button wire:click="delete({{ $row -> id}})" class="bg-red-500 hover:bg-red-500 text-white font-bold py-2 px-2 rounded">Delete</button>
                        
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="5"> Tidak ada Data </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>