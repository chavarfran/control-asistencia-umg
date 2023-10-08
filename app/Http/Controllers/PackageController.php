<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{

    public function getPython3Versions() {
        $output = [];
        exec('apt-cache madison python3', $output);
    
        $versions = collect($output)->map(function ($line) {
            $parts = array_map('trim', explode('|', $line));
            // Using a regular expression to extract the full version (including subversions)
            preg_match('/(\d+\.\d+\.\d+)/', $parts[1], $matches);
            return isset($matches[1]) ? 'Python ' . $matches[1] : null;
        })->unique()->filter();  // unique() ensures we only get distinct values and filter() removes any null values
    
        return view('livewire.user.package', ['versions' => $versions]);
    }
}