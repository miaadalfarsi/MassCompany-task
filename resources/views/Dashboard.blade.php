<table id="nn" class="table table-bordered table-hover">
    <thead>
    <tr>
      <th>ID </th>
    
     
      
    </tr>
    </thead>
    <tbody>
      @foreach($Student_data as $data)
      <tr>

        
        <td>{{( $data->age())}}</td>
      
          
          
         
      </tr>   @endforeach
    </tbody>
    
  </table>