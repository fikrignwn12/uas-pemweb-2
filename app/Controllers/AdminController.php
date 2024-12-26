<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TelevisionsModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController {
    public function index() {
        return view('admin/dashboard');
    }

    public function daftarTelevisi() {
        $televisiModel = new TelevisionsModel();
        $data['televisi'] = $televisiModel->findAll();
        return view('admin/daftar-televisi', $data);
    }

    public function daftarTelevisiTambah() {
        return view('admin/daftar-televisi-tambah');
    }

    public function createTelevisi() {
        $data = $this->request->getPost();
        $file = $this->request->getFile('gambar');

        if(!$file->hasMoved()) {
            $path = $file->store('images');
            $data['gambar'] = $path;
        }

        $televisiModel = new TelevisionsModel();

        if($televisiModel->insert($data,false)) {
            return redirect()->to('admin/daftar-televisi')->with('berhasil','data berhasil disimpan!');
        } else {
            return redirect()->to('admin/daftar-televisi')->with('gagal','data gagal disimpan!');
        }
    }

    public function daftarTelevisiEdit($id) {
        $televisiModel = new TelevisionsModel();
        $data['televisi'] = $televisiModel->find($id);
        
        if ($data['televisi']) {
            return view('admin/daftar-televisi-edit', $data);
        }
        return redirect()->to('admin/daftar-televisi')->with('gagal', 'Data TELEVISI tidak ditemukan.');
    }

    public function updateTelevisi($id) {
        $televisiModel = new TelevisionsModel();
        $data = $this->request->getPost();

        // Handle image upload if new image is provided
        $file = $this->request->getFile('gambar');
        if ($file->isValid() && !$file->hasMoved()) {
            $path = $file->store('images');
            $data['gambar'] = $path;
        }
        
        if ($televisiModel->update($id, $data)) {
            return redirect()->to('admin/daftar-televisi')->with('berhasil', 'Data TELEVISI berhasil diupdate!');
        }
        return redirect()->to('admin/daftar-televisi')->with('gagal', 'Data TELEVISI gagal diupdate!');
    }

    public function hapusTelevisi($id) {
        $televisiModel = new TelevisionsModel();
        $televisi = $televisiModel->find($id);

        if ($televisiModel) {
            $televisiModel->delete($id);
            return redirect()->to('/admin/daftar-televisi')->with('berhasil', 'Data TELEVISI berhasil dihapus.');
        }
        return redirect()->to('/admin/daftar-televisi')->with('gagal', 'Data TELEVISI tidak ditemukan.');
    }

    public function transaksi() {
        return view('admin/transaksi');
    }

    public function transaksiUbahStatus() {
        return view('admin/transaksi-ubah-status');
    }

    public function transaksiHapus() {
        return view('admin/transaksi-hapus');
    }

    public function pelanggan() {
        return view('admin/pelanggan');
    }

    public function pelangganHapus() {
        return view('admin/pelanggan-hapus');
    }
}