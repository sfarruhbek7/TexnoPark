@extends('layouts.admin')
@section('content')

        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="dark:text-white text-justify">Xabarlar</h6>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-5 overflow-x-auto mb-5">

                            <div class="w-full max-w-full px-3 mb-6 sm:w-full sm:flex-none xl:mb-0 xl:w-2/4">
                                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                                    <div class="flex-auto p-4 w-full">
                                        <div class="flex flex-row -mx-3 w-full p-3">
                                            <div class="pl-2 text-sm focus:shadow-primary-outline min-w-0 flex-auto rounded-lg dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700">
                                                <div class="pl-2 text-sm focus:shadow-primary-outline ease leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700">
                                                    <label>Name: {{$data->name}}</label><br>Email:
                                                    <label style="color: #0a53be"> {{$data->email}}</label>
                                                </div>
                                                <div class="pl-2 text-sm focus:shadow-primary-outline ease leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700">
                                                    <h3>{{$data->subject}}</h3>
                                                    <p>{{$data->message}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
