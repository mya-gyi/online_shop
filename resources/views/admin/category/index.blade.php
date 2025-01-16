@section('title', 'Category List')
@extends('admin.layouts.app')
@section('content')

    <div class="main-content">
        <div class="section">
            {{-- Header --}}
            <div class="section-header">
                <h1>Category List</h1>
                <div class="section-header-bredcrumb">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary" role="button"><i class="fas fa-plus">Add Category</i></a>
                </div>
            </div>

            {{-- Body - Main Content --}}
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
