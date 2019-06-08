package com.luka.geolocation;

import android.Manifest;
import android.annotation.SuppressLint;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.pm.PackageManager;
import android.location.Address;
import android.location.Criteria;
import android.location.Geocoder;
import android.location.Location;
import android.location.LocationListener;
import android.location.LocationManager;
import android.os.AsyncTask;
import android.support.v4.app.ActivityCompat;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.widget.Toast;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.net.HttpURLConnection;
import java.net.URL;
import java.net.URLEncoder;
import java.util.List;

public class MainActivity extends AppCompatActivity {

    private LocationManager locationManager;
    private String provider;
    private MainActivity mylistener;
    private Criteria criteria;
    final private int REQUEST_CODE_ASK_PERMISSIONS = 123;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);



    }

    @Override
    protected void onStart() {
        super.onStart();
        if (AppStatus.isLocationEnabled(this) && AppStatus.getInstance(this).isOnline()) {

            String latAndLong = getLatAndLong();
            SendDataToServer sendDataToServer = new SendDataToServer();
            sendDataToServer.execute(latAndLong);

        } else {
            Toast.makeText(this, "Please turn on Wi-Fi and Locations", Toast.LENGTH_LONG).show();
        }
    }


    private String getLatAndLong() {
        Geocoder geocoder;
        String bestProvider;
        List<Address> user = null;
        double lat;
        double lng;

        LocationManager lm = (LocationManager) getSystemService(Context.LOCATION_SERVICE);

        Criteria criteria = new Criteria();
        bestProvider = lm.getBestProvider(criteria, false);
        if (ActivityCompat.checkSelfPermission(this, Manifest.permission.ACCESS_FINE_LOCATION) != PackageManager.PERMISSION_GRANTED && ActivityCompat.checkSelfPermission(this, Manifest.permission.ACCESS_COARSE_LOCATION) != PackageManager.PERMISSION_GRANTED) {

            ActivityCompat
                    .requestPermissions(MainActivity.this, new String[]{Manifest.permission.ACCESS_FINE_LOCATION}, REQUEST_CODE_ASK_PERMISSIONS);
        }
        Location location = lm.getLastKnownLocation(bestProvider);

        if (location == null){
            Toast.makeText(MainActivity.this,"Location Not found",Toast.LENGTH_LONG).show();
        }else{
            try {
                double latitude = location.getLatitude();
                double longitude = location.getLongitude();
                String data =  latitude + ";" + longitude;

                return data;

            }catch (Exception e) {
               e.printStackTrace();
            }
        }
        return "";

    }

    private class SendDataToServer extends AsyncTask<String,Void,String> {


        @SuppressLint("StaticFieldLeak")


        @Override
        protected String doInBackground(String... strings) {
            String response = getServerResponse(strings[0]);
            return response;
        }

        @Override
        protected void onPostExecute(String s) {

            Intent i = new Intent(MainActivity.this, MapActivity.class);
            i.putExtra("key",s);
            startActivity(i);
        }


        private String getServerResponse(String latAndLong) {

            HttpURLConnection urlConnection = null;
            BufferedReader reader = null;
            String serverResponse = null;
            String MAC_ADDRESS = AppStatus.getMacAddress();
            String[] array;
            String latitude;
            String longitude;
            if(latAndLong.isEmpty()) {
                latitude = "12.646334";
                longitude = "52.125125";
            } else {
                array = latAndLong.split(";");
                latitude = array[0];
                longitude = array[1];
            }
            final String URL = "https://luka.secondsection.in.rs/index.php";

            try {

                String data =
                        URLEncoder.encode("mac", "UTF-8") + "=" + URLEncoder.encode(MAC_ADDRESS, "UTF-8") + "&" +
                        URLEncoder.encode("latitude","UTF-8") + "=" + URLEncoder.encode(latitude,"UTF-8") + "&" +
                        URLEncoder.encode("longitude","UTF-8") + "=" + URLEncoder.encode(longitude,"UTF-8")
                        ;
                URL url = new URL(URL);

                urlConnection = (HttpURLConnection) url.openConnection();
                urlConnection.setDoOutput(true);
                urlConnection.setRequestMethod("POST");
                OutputStreamWriter wr = new OutputStreamWriter(urlConnection.getOutputStream());
                wr.write(data);
                wr.flush();
                urlConnection.connect();

                InputStream inputStream = urlConnection.getInputStream();
                StringBuffer buffer = new StringBuffer();
                if (inputStream == null) {
                    return null;
                }
                reader = new BufferedReader(new InputStreamReader(inputStream));
                String line;

                while ((line = reader.readLine()) != null) {
                    buffer.append(line + "\n");
                }

                if (buffer.length() == 0) {
                    return null;
                }
                serverResponse = buffer.toString();


            } catch (IOException e) {
                Log.e("Server Response", "Error: ", e);
                return null;
            } finally {
                if (urlConnection != null) {
                    urlConnection.disconnect();
                }
                if (reader != null) {
                    try {
                        reader.close();
                    } catch (final IOException e) {
                        Log.e("Server Response", "IO Exception", e);
                    }
                }
            }
            return serverResponse;
        }
    }

}


