<?php
namespace App\Controllers;
use App\Models\siswamodel;

class siswa extends BaseController
{
   public function index()
   {
        $siswa = new siswamodel();
        $data['siswa'] = $siswa->orderBy('nama', 'asc')->findAll();
        echo view('siswa', $data);
   }
   public function add() 
   {
		return view('add');
   }
   public function create()
   {
      $siswa = new siswamodel();

      $result = $siswa->insert([
         
         'nama'=>$this->request->getPost("nama"),
         'jenis_kelamin'=>$this->request->getPost("jenis_kelamin"),
         'tempat_lahir'=>$this->request->getPost("tempat_lahir"),
         'tanggal_lahir'=>$this->request->getPost("tanggal_lahir"),
         'alamat'=>$this->request->getPost("alamat")
      ]);
      if($result==true) {
         return redirect()->to("/siswa");
      }
   }
   public function delete($nis) {
      $siswa = new siswamodel();
      $detail['delete'] = $siswa->find($nis);

      if ($this->request->getMethod() === 'post') {
         $siswa->delete($nis);
         
         return redirect()->to('/siswa')
                        ->with('info', 'Berhasil menghapus data');
      }

      return view('delete', $detail);
   }
   public function edit($nis) 
   {
      $siswa = new siswamodel();
      $detail['edit'] = $siswa->find($nis);
      return view('edit', $detail);
   }
   public function update($nis) {
      $siswa = new siswamodel();
      
      $result = $siswa->update($nis,[
         
         'nama'=>$this->request->getPost("nama"),
         'jenis_kelamin'=>$this->request->getPost("jenis_kelamin"),
         'tempat_lahir'=>$this->request->getPost("tempat_lahir"),
         'tanggal_lahir'=>$this->request->getPost("tanggal_lahir"),
         'alamat'=>$this->request->getPost("alamat"),
         'kelas'=>$this->request->getPost("kelas")
      ]);

      
      return redirect()->to('/siswa')
                        ->with('info', 'Berhasil mengupdate data');

}
}