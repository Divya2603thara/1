<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
   @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align ="center">
                <table>
                    <tr style="background-color: grey;">
                        <td style="padding: 20px;">Title</td>
                        <td style="padding: 20px;">Description</td>
                        <td style="padding: 20px;">Price</td>
                        <td style="padding: 20px;">Quantity</td>
                        <td style="padding: 20px;">Image</td>
                        <td style="padding: 20px;">Update</td>
                        <td style="padding: 20px;">Delete</td>
                    </tr>

                    @foreach($data as $product)
                    <tr align="center" style="background-color: black; align-items:center">
                        <td>{{ $product->title}}</td>
                        <td>{{ $product->description}}</td>
                        <td>{{ $product->price}}</td>
                        <td>{{ $product->quantity}}</td>
                       

                        <td>
                            <img height="100px" width="100px"  src="/productimage/{{ $product->image}}">
                        </td>
                        <td><a class="btn btn-primary" href="{{url('updateproduct',$product->id)}}">Update</a></td>
                        <td><a class="btn btn-danger" onclick="return confirm('Are You Sure')" href="{{url('deleteproduct',$product->id)}}">Delete</a></td>                    </tr>
                    @endforeach


                </table>

            </div>

        </div>
       
        @include('admin.script')
  </body>
</html>