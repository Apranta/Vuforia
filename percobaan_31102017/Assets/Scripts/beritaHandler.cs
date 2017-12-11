using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class beritaHandler : MonoBehaviour {

    public GameObject headlinePosition;
    public GameObject headlineBerita;
    public static beritaHandler instance;
    public float yPosition;
    Text[] newJudul;
    public string url = "http://localhost/vuforia/api";
    public string jsonString;

    private delegate void TextDelegate(string text);

    void Awake()
    {
        if (instance == null)
            instance = this;
        else if (instance != this)
            Destroy(gameObject);
    }

    // Use this for initialization
    void Start () {
        StartCoroutine(DownloadTest(url));
    }
	
	// Update is called once per frame
	void Update () {
		
	}

    public void createBerita()
    {
        Debug.Log(jsonString);
        float newPos = yPosition;
        for (int i = 0; i < 3; i++)
        {
            headlineBerita.transform.position = new Vector3(headlineBerita.transform.position.x, 
                newPos - (i * 70), headlineBerita.transform.position.z);
            newJudul = headlineBerita.GetComponentsInChildren<Text>();
            newJudul[0].text = "Dummy Header Berita " + i;
            Instantiate(headlineBerita, headlinePosition.transform);
            headlineBerita.transform.position = new Vector3(headlineBerita.transform.position.x, 
                yPosition, headlineBerita.transform.position.z);
        }
    }

    private IEnumerator DownloadTest(string url)
    {
        WWW www = new WWW(url);
        yield return www;
        jsonString = www.text;
    }

    private void PrintText(string text)
    {
        Debug.Log(text);
    }
}
