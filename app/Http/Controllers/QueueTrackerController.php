<?php

namespace App\Http\Controllers;

use App\Models\QueueMonitor;
use Illuminate\Support\Facades\Artisan;

class QueueTrackerController extends Controller {
    /**
     * queueWork
     */
    public function queueWork() {
        Artisan::call('queue:work');
    }

    /**
     * queueWork
     */
    public function queueRetry() {
        Artisan::call('queue:retry all');
    }

    /**
     * queueFailed
     */
    public function queueFailed() {
        $fails = QueueMonitor::where('failed', 1)->latest()->paginate(20);

        return view('queue.failed.index', compact('fails'));
    }

    /**
     * queueProccessed
     */
    public function queueProccessed() {
        $proccessed = QueueMonitor::where('failed', 0)->latest()->paginate(20);

        return view('queue.proccessed.index', compact('proccessed'));
    }
    //END
}
